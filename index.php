<?php
$pageTitle = "หน้าแรก - MyWebsite";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- ===== หน้า HOMEPAGE ===== -->
<div class="grid md:grid-cols-12 gap-6 items-stretch min-h-[70vh]">
  <div class="md:col-span-7 flex flex-col justify-center py-6">
    <p class="tracking-[.35em] text-xs text-rose-900/60 dark:text-rose-200/60 mb-4">PORTFOLIO</p>
    <h1 class="font-extrabold leading-[.95] text-6xl md:text-8xl">[Kiadtisak]<br><span class="[-webkit-text-stroke:1.5px_currentColor] [-webkit-text-fill-color:transparent] text-sakura dark:text-sakura-light">[Khamheang]</span></h1>
    <p class="text-rose-900/60 dark:text-rose-200/60 text-lg max-w-md mt-6">นักศึกษา [Information Technology] มหาวิทยาลัยราชภัฏรำไพพรรณี จันทบุรี</p>
    <div class="flex gap-8 mt-8 font-semibold">
      <a href="bio.php" class="text-sakura dark:text-sakura-light border-b-2 border-sakura pb-1">ประวัติ Bio</a>
      <a href="assignment.php" class="border-b-2 border-rose-200 dark:border-purple-900/60 pb-1">รายการงาน  →</a>
    </div>
  </div>
<script>

<?php
include 'includes/footer.php';
?>