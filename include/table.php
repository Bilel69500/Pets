<?php


function showTable($rows, $headers)
{
?>
    <table class="table">
        <thead>
        <tr>
            <?php foreach ($headers as $header): ?>
                <th><?php echo $header; ?></th>
            <?php endforeach; ?>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <?php for ($k = 0; $k < count($headers); $k++): ?>
                    <?php if ($k == 0){ ?>
                        <td><?php echo '<a href=users.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
                    <?php } else { ?>
                        <td><?php echo $row[$k]; ?></td>
                    <?php } ?>

                <?php endfor; ?>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
    <?php
}