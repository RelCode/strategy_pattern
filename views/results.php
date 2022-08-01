<div class="container">
    <div class="page-header">Original Input</div>
    <ul class="sort-values">
        <?php
        $liElement = '';
        for ($i = 0; $i < count($original); $i++) {
            $liElement .= '<li>' . $original[$i] . '</li>';
        }
        echo $liElement;
        ?>
    </ul>
    <div class="page-header"><?= ucfirst($_GET['algorithm']); ?> Sort Result</div>
    <ul class="sort-values">
        <?php
        $liElement = '';
        for ($i = 0; $i < count($sorted); $i++) {
            $liElement .= '<li>' . $sorted[$i] . '</li>';
        }
        echo $liElement;
        ?>
    </ul>
</div>