<?php
include("../header.php");
include("../menu.php");

$baseFolder = __DIR__ . "/billeder";

// Hent albumnavn fra URL’en
$albumName = isset($_GET['navn']) ? basename($_GET['navn']) : null;
$albumPath = "$baseFolder/$albumName";

?>

<div class="container" style="padding: 40px;">
  <a href="images2.php" style="text-decoration:none;">&larr; Tilbage til galleri</a>
  <h1><?= htmlspecialchars($albumName) ?></h1>

  <?php
  if ($albumName && is_dir($albumPath)):
    $images = glob("$albumPath/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
    sort($images);

    echo count($images) . " billeder fundet.";

    if (count($images) > 0):
  ?>
      <div class="album-grid" style="display:flex; flex-wrap:wrap; gap:10px;">
        <?php foreach ($images as $img): ?>
          <div style="flex: 1 0 calc(33% - 10px);"> <!-- 5 billeder per række -->
            <a href="billeder/<?= urlencode($albumName) ?>/<?= basename($img) ?>" target="_blank">
              <img src="billeder/<?= urlencode($albumName) ?>/<?= basename($img) ?>" 
                   alt="" 
                   style="width:100%; height:auto; border-radius:8px; box-shadow:0 0 5px rgba(0,0,0,0.3);">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
  <?php
    else:
      echo "<p>Der er ingen billeder i dette album.</p>";
    endif;
  else:
    echo "<p>Ugyldigt album.</p>";
  endif;
  ?>
</div>


<?php
include("../footer.php");
?>