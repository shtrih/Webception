<?php
/**
 * Created by PhpStorm.
 * User: shtrih
 * Date: 05.03.15
 * Time: 17:58
 */

namespace Shtrih\AnsiConverter\Theme;

/**
 * Webception Console light theme.
 */
class ConsoleLightTheme extends \SensioLabs\AnsiConverter\Theme\Theme
{
    public function asArray()
    {
        return array(
            // normal
            'black'   => '#f2f2f2',//'#eee8d5',
            'red'     => '#dc322f',
            'green'   => '#859900',
            'yellow'  => '#b58900',
            'blue'    => '#268bd2',
            'magenta' => '#d33682',
            'cyan'    => '#2aa198',
            'white'   => '#073642',

            // bright
            'brblack'   => '#dbdbdb',//fdf6e3
            'brred'     => '#cb4b16',
            'brgreen'   => '#93a1a1',
            'bryellow'  => '#839496',
            'brblue'    => '#657b83',
            'brmagenta' => '#6c71c4',
            'brcyan'    => '#586e75',
            'brwhite'   => '#002b36',
        );
    }
}