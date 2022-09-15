<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
            <ul>
                <?php
                for ($i = 0; $i < 2; $i++):
                ?>
                <li>Duck</li>
                    <?php
                    endfor;
                    ?>
                <li>Goose</li>
            </ul>



            <ul>
                <?php
                $i = 0;
                while ($i < 2):
                ?>
                <li>Duck</li>
                    <?php
                    $i++;
                    endwhile;
                    ?>
                <li>Goose</li>
            </ul>



            <ul>
                <?php
                $array = [0, 1];
                foreach ($array as $i):
                    ?>
                <li>Duck</li>
                    <?php
                    endforeach;
                    ?>
                <li>Goose</li>
        </ul>
    </body>
</html>