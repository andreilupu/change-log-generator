<?php

if ( !isset($_POST['from_tag'] ) || !isset( $_POST['to_tag'])) return;

$diff = $git->getDiff($_POST['from_tag'], $_POST['to_tag']);

$parser = new \SebastianBergmann\Diff\Parser();
$diffs = $parser->parse($diff);  ?>

<ul class="files">
<?php foreach ($diffs as $key => $dif ) {?>
    <li class="file">
        <a href="#" ><?php echo substr($dif->getFrom(), 2); ?></a>
        <ul class="chunks">
            <?php
            $chunks = $dif->getChunks();

            foreach ($chunks as $c => $chunk ) {

                $lines = $chunk->getLines(); ?>
                <li class="chunk" style="background: #ebebeb; margin:2px;">

                    <ul class="lines" >

                        <?php
                        $counterStart = $chunk->getStart();
                        $counterEnd = $chunk->getEnd();
                        foreach ( $lines as $l => $line ) { ?>
                            <li class="line" style="border-bottom: 1px solid #333; <?php
                            switch ($line->getType()) {
                                case 1:
                                    echo 'color: green';
                                    break;
                                case 2:
                                    echo 'color: red';
                                    break;
                                case 3:
                                    echo 'color: gray';
                                    break;
                            }

                            ?>">
                                <?php
                                switch ($line->getType()) {
                                    case 1:
                                        echo "<strong>".(++$counterEnd)."</strong>";
                                        echo '+ ';
                                        break;
                                    case 2:
                                        echo "<strong>".(--$counterStart)."</strong>";
                                        echo '- ';
                                        break;
                                    default:
                                        echo "<strong>".(++$counterEnd)."</strong>";
                                }

                                ?><?php echo(htmlspecialchars($line->getContent())); ?>
                            </li>

                        <?php } ?>


                    </ul>

                </li>
        <?php } // end chunks ?>
        </ul>
    </li>

<?php } // end diffs?>

</ul>

