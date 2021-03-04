<?php


/**
 * Class insertDom
 */
class insertDom
{
    /**
     * @var string
     */
    public static string $html;
    /**
     * @var string
     */
    public static string $row;
    /**
     * @var string
     */
    public static string $board;

    /**
     *
     * Here we are creating setting the value of self::row and returning it.
     * @return string
     */
    public static function setRow(): string
    {
        self::$row = '<div class="row">';
        for ($i = 0; $i < 17; $i++) {
            // While iterating I am concatenating the html string into our self::$row. You'll see I am also adding the value as well.
            self::$row .= '<div class="cell"><button type="submit" name="cell" class="button" value="' . $i . '">' . $i . '</button></div>';
        }
        return self::$row .= '</div>';
    }

    /**
     *
     * I'm now calling our self::setRow() function and concatenating the results in the self::$board.
     * @return string
     */
    public static function setBoard(): string
    {
        self::$board = '<div class="board">';
        self::$board .= self::setRow();
        // Here we are also returning the results of concatenation.
        return self::$board .= '</div>';
    }

    /*
     *
     * Finally the outputHtml. We'll be calling this one in our PHP. This will finally allow us to have 16 sets of 16 rows.
     * @return string
     * */
    public static function outputHtml(): string
    {
        self::$html = '<form action="moveReceiver.php" method="post" class="game">';
        for ($i = 0; $i < 17; $i++) {
            self::$html .= self::setBoard();
        }
        return self::$html .= '</form>';
    }
}