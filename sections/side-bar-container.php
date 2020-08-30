<?php
$page = $_SERVER['REQUEST_URI'];
$isElderlyCare = preg_match("/elderly-service/i", $page);
$isPersonalCare = preg_match("/personal-care/i", $page);
$isRespiteCare = preg_match("/respite-care/i", $page);
$isSkilledNursing = preg_match("/nursing/i", $page);
$isDaySupport = preg_match("/support/i", $page);
$isHospitalDischarge = preg_match("/discharge/i", $page);
$isCompanionCare = preg_match("/care/i", $page);
$isChronicalConditionCare = preg_match("/chronical/i", $page);
$isAfterSurgeryCare = preg_match("/surgery/i", $page);
$isEndofLifeCare = preg_match("/life-care/i", $page);
$isSpecialNeedCare = preg_match("/pecial-care/i", $page);
?>
<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Services Detail -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="services-detail" id="services-detail">
                    <?php /*
                    <?php if ($isElderlyCare): ?>
                        <?php include('services/elderly-service.php'); ?>
                    <?php elseif ($isPersonalCare): ?>
                        <?php include('services/personal-care.php'); ?>
                    <?php elseif ($isRespiteCare): ?>
                        <?php include('services/respite-care.php'); ?>
                    <?php elseif ($isSkilledNursing): ?>
                        <?php include('services/nursing.php'); ?>
                    <?php elseif ($isDaySupport): ?>
                        <?php include('services/support.php'); ?>
                    <?php elseif ($isHospitalDischarge): ?>
                        <?php include('services/discharge.php'); ?>
                    <?php elseif ($isCompanionCare): ?>
                        <?php include('services/care.php'); ?>
                    <?php elseif ($isChronicalConditionCare): ?>
                        <?php include('services/chronical.php'); ?>
                    <?php elseif ($isAfterSurgeryCare): ?>
                        <?php include('services/surgery.php'); ?>
                    <?php elseif ($isEndofLifeCare): ?>
                        <?php include('services/life-care.php'); ?>
                    <?php elseif ($isSpecialNeedCare): ?>
                        <?php include('services/special-care.php'); ?>
                    <?php endif; ?>
                    */ ?>
                </div>
            </div>

            <?php include 'side-bar.php'; ?>

        </div>
    </div>
</div>