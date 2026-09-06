<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use CodeIgniter\View\View;

if (!function_exists('register_jquery3'))
{
    function register_jquery3(array $params = [], ?View $renderer = null) : void
    {
        helper(['scripts', 'render_view']);

        add_script(render_view('BasicApp\Jquery3\scripts', $params), true, $renderer);
    }
}