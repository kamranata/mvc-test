  <ul class="pagination">
            <?php for ($i = 1; $i < $tasks->total; $i ++): ?>
            <li class="page-item"><a class="page-link" href="#"><?=$i?></a></li>
            <?php endfor ?>
          </ul>