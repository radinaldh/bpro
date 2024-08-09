<?php

/* Template Name: QR Code Scanner */

if (!is_user_logged_in() || !(current_user_can('administrator') || current_user_can('panitia'))) {
    wp_redirect(home_url('/panitia-login'));
    exit;
}

get_header();
?>
<style>
    section {
        background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(10, 31, 56, 1) 26%, rgba(10, 31, 56, 1) 73%, rgba(0, 0, 0, 1) 100%);
        background-repeat: no-repeat;
        color: #fff;
    }
</style>

<section class="position-absolute top-0 left-0 w-100 z-3 py-3" style="background-color: #000">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-start">
                <button class="btn btn-secondary" onclick="logout()">Logout</button>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-primary" href="/submission-list">See Participants</a>
            </div>
        </div>
    </div>
</section>

<section class="vh-100 d-flex justify-content-center align-items-center">
    <div id="reader" style="width: 100%; height: auto;"></div>
</section>

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- Modal for alerts -->

<div id="alertModal" class="modal fade" tabindex="-1" role="dialog">

    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">Confirmation Status</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <p id="alertMessage"></p>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary" onclick="closeModal()">OK</button>

            </div>

        </div>

    </div>

</div>



<script src="https://unpkg.com/html5-qrcode"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    var html5QrCode = new Html5Qrcode("reader");

    var currentCameraId = null;

    var availableCameras = [];

    var cameraIndex = 0; // To keep track of which camera is currently being used

    var scanning = true; // Flag to control scanning



    function onScanSuccess(decodedText, decodedResult) {
        if (!scanning) return;

        scanning = false;
        const url = new URL(decodedText);
        const token = url.searchParams.get('token');

        fetch(`https://bethanyprofessional.com/wp-json/bethany/v1/check-in?token=${encodeURIComponent(token)}`, {
                method: 'GET',
                headers: {
                    'x-secret-key': 'aB7#dfG8*kLm@1nOpQr9+T!sUvWx2yZ'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('User Confirmed!');
                } else if (data.message === 'User already checked in') {
                    showAlert('User is confirmed already!');
                } else {
                    showAlert('Check-in failed. ' + data.message);
                }
            }).catch(error => {
                console.error('API call failed:', error);
                showAlert('Check-in failed due to network error.');
            });
    }

    function onScanFailure(error) {
        console.warn(`Code scan error = ${error}`);
    }



    function startScanner(cameraId) {

        scanning = true; // Enable scanning

        html5QrCode.start(cameraId, {

                fps: 10, // frames per second

                qrbox: {

                    width: 250,

                    height: 250

                } // Optional if you want bounded box UI

            }, onScanSuccess, onScanFailure)

            .catch(err => {

                console.error(`Unable to start scanning, error: ${err}`);

                showAlert('Unable to start scanning, please ensure you have granted camera access.');

            });

    }



    function setupCameras() {

        Html5Qrcode.getCameras().then(cameras => {

            if (cameras && cameras.length) {

                availableCameras = cameras;

                // Attempt to find the back camera first

                const backCamera = cameras.find(camera => camera.label.toLowerCase().includes("back"));

                if (backCamera) {

                    currentCameraId = backCamera.id; // Use the back camera if available

                } else {

                    currentCameraId = cameras[0].id; // Default to the first camera if no back camera is found

                }

                startScanner(currentCameraId);

            } else {

                console.error('No cameras found.');

                showAlert('No cameras found.');

            }

        }).catch(err => {

            console.error('Failed to get cameras:', err);

            showAlert('Failed to get cameras, please ensure you have granted camera access.');

        });

    }



    function toggleCamera() {

        if (availableCameras.length > 1) {

            cameraIndex = (cameraIndex + 1) % availableCameras.length; // Cycle through the camera array

            currentCameraId = availableCameras[cameraIndex].id; // Update current camera ID

            html5QrCode.stop().then(() => {

                // Restart the scanner with the new camera

                startScanner(currentCameraId);

            }).catch(err => {

                console.error('Failed to stop the camera:', err);

                showAlert('Failed to switch camera.');

            });

        } else {

            showAlert('Only one camera available.');

        }

    }



    function showAlert(message) {

        document.getElementById('alertMessage').innerText = message;

        $('#alertModal').modal('show');

    }



    function closeModal() {

        $('#alertModal').modal('hide');

        setTimeout(() => {

            scanning = true; // Re-enable scanning after modal is closed

        }, 1000); // Add a delay to ensure modal has time to close

    }

    function logout() {
        window.location.href = '<?php echo wp_nonce_url(site_url('?action=logout'), 'log-out'); ?>';
    }

    // Initialize cameras and start scanner

    setupCameras();
</script>



<?php

get_footer();
