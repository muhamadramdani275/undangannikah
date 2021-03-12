<section class="container-fluid jumbocover" id="jumbocover">
    <div class="row">
        <div class="col-12 bg-cover">
            <div class="d-flex justify-content-center">
                <img src="<?= base_url('/assets/img') ?>/wedding.svg" alt="Welcome Greetings" class="welcome">
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="invited">Hello! <br> <?= $namatamu ?> <br> You're invited.</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <h3 class="invited">See the invitation.</h3>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 text-center arah-bawah">
                    <i class="fas fa-arrow-down"></i>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 text-center">
                    <button class="btn btn-lg btn-primary px-5 open-invitation" id="open-invitation">Open Invitation</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#open-invitation").click(function() {
            $
            $("#jumbocover").animate({
                top: "-2000px",
                opacity: "0"
            }, 800);
        });
    });
</script>