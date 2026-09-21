<?php
include("../header.php");
include("../menu.php");
?>

<div class="container" style="padding:40px; text-align:center;">
  <h1>OZ4VBG Galleri</h1>
  <p>Vælg et album for at se billederne.</p>

  <?php
  $baseFolder = __DIR__ . "/billeder";
  $albums = glob("$baseFolder/*", GLOB_ONLYDIR);

  if ($albums && count($albums) > 0):
  ?>
      <div class="album-grid" style="display:flex; flex-wrap:wrap; justify-content:flex-start; gap:20px;">
        <?php foreach ($albums as $album): 
          $albumName = basename($album);
          $images = glob("$album/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
          sort($images);
          if (count($images) === 0) continue;

          $coverImage = basename($images[0]);
        ?>
          <div style="flex: 1 0 calc(25% - 20px); max-width:250px; box-sizing:border-box;">
            <div class="card" style="box-shadow:0 0 10px rgba(0,0,0,0.2); border-radius:10px; overflow:hidden;">
              <a href="album.php?navn=<?= urlencode($albumName) ?>">
                <img src="billeder/<?= urlencode($albumName) ?>/<?= $coverImage ?>" 
                     alt="<?= htmlspecialchars($albumName) ?>" 
                     style="width:100%; height:150px; object-fit:cover; display:block;">
              </a>
              <div class="card-body" style="padding:10px; text-align:center;">
                <h4><?= htmlspecialchars($albumName) ?></h4>
                <p style="color:gray; font-size:0.9em;"><?= count($images) ?> billeder</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
  <?php
  else:
      echo "<p>Ingen albummer fundet i <strong>$baseFolder</strong>.</p>";
  endif;
  ?>
</div>

<?php
include("../footer.php");
?>
