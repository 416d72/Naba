<!-- Login Page -->
<div class="page box">
    <!-- Centered Content -->
    <div class="centered-content">
        <h1 style="text-align: center"><i class="fa fa-check-square" aria-hidden="true"></i> <?php echo $success; ?></h1>
    </div>
    <!--/ Centered Content -->
</div>
<!--/ Login Page -->
<script>
    setTimeout(function () {
        window.location.replace('<?php echo url('/login'); ?>');
    }, 3000);
</script>