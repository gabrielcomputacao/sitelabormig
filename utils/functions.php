<?php

function getPath($namePath, $depth)
{
    $newPath = '';

    if (environment === 'DEV') {

        switch ($depth) {
            case 0:
                $newPath = './sitelabormig/' . $namePath;
                break;
            case 1:
                $newPath = '../sitelabormig/' . $namePath;
                break;
            case 2:
                $newPath = '../../sitelabormig/' . $namePath;
                break;

            default:

                break;
        }
    } else {
        switch ($depth) {
            case 0:
                $newPath = './' . $namePath;
                break;
            case 1:
                $newPath = '../' . $namePath;
                break;
            case 2:
                $newPath = '../../' . $namePath;
                break;

            default:

                break;
        }
    }


    return $newPath;
}
