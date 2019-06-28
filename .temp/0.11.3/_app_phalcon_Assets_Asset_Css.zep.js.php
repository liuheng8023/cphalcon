<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *',
    'file' => '/app/phalcon/Assets/Asset/Css.zep',
    'line' => 11,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'Phalcon\\Assets\\Asset',
    'file' => '/app/phalcon/Assets/Asset/Css.zep',
    'line' => 13,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Assets\\Asset',
        'alias' => 'AssetBase',
        'file' => '/app/phalcon/Assets/Asset/Css.zep',
        'line' => 13,
        'char' => 38,
      ),
    ),
    'file' => '/app/phalcon/Assets/Asset/Css.zep',
    'line' => 17,
    'char' => 2,
  ),
  3 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Represents CSS assets
 *',
    'file' => '/app/phalcon/Assets/Asset/Css.zep',
    'line' => 18,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Css',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AssetBase',
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'path',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/app/phalcon/Assets/Asset/Css.zep',
              'line' => 24,
              'char' => 21,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'local',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/app/phalcon/Assets/Asset/Css.zep',
                'line' => 25,
                'char' => 26,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Assets/Asset/Css.zep',
              'line' => 25,
              'char' => 26,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'filter',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/app/phalcon/Assets/Asset/Css.zep',
                'line' => 26,
                'char' => 27,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Assets/Asset/Css.zep',
              'line' => 26,
              'char' => 27,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'attributes',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/app/phalcon/Assets/Asset/Css.zep',
                'line' => 27,
                'char' => 30,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Assets/Asset/Css.zep',
              'line' => 27,
              'char' => 30,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'version',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/app/phalcon/Assets/Asset/Css.zep',
                'line' => 28,
                'char' => 30,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Assets/Asset/Css.zep',
              'line' => 28,
              'char' => 30,
            ),
            5 => 
            array (
              'type' => 'parameter',
              'name' => 'autoVersion',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/app/phalcon/Assets/Asset/Css.zep',
                'line' => 30,
                'char' => 5,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Assets/Asset/Css.zep',
              'line' => 30,
              'char' => 5,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'parent',
                'dynamic' => 0,
                'name' => '__construct',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'css',
                      'file' => '/app/phalcon/Assets/Asset/Css.zep',
                      'line' => 32,
                      'char' => 32,
                    ),
                    'file' => '/app/phalcon/Assets/Asset/Css.zep',
                    'line' => 32,
                    'char' => 32,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'path',
                      'file' => '/app/phalcon/Assets/Asset/Css.zep',
                      'line' => 32,
                      'char' => 38,
                    ),
                    'file' => '/app/phalcon/Assets/Asset/Css.zep',
                    'line' => 32,
                    'char' => 38,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'local',
                      'file' => '/app/phalcon/Assets/Asset/Css.zep',
                      'line' => 32,
                      'char' => 45,
                    ),
                    'file' => '/app/phalcon/Assets/Asset/Css.zep',
                    'line' => 32,
                    'char' => 45,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'filter',
                      'file' => '/app/phalcon/Assets/Asset/Css.zep',
                      'line' => 32,
                      'char' => 53,
                    ),
                    'file' => '/app/phalcon/Assets/Asset/Css.zep',
                    'line' => 32,
                    'char' => 53,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'attributes',
                      'file' => '/app/phalcon/Assets/Asset/Css.zep',
                      'line' => 32,
                      'char' => 65,
                    ),
                    'file' => '/app/phalcon/Assets/Asset/Css.zep',
                    'line' => 32,
                    'char' => 65,
                  ),
                  5 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'version',
                      'file' => '/app/phalcon/Assets/Asset/Css.zep',
                      'line' => 32,
                      'char' => 74,
                    ),
                    'file' => '/app/phalcon/Assets/Asset/Css.zep',
                    'line' => 32,
                    'char' => 74,
                  ),
                  6 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'autoVersion',
                      'file' => '/app/phalcon/Assets/Asset/Css.zep',
                      'line' => 32,
                      'char' => 87,
                    ),
                    'file' => '/app/phalcon/Assets/Asset/Css.zep',
                    'line' => 32,
                    'char' => 87,
                  ),
                ),
                'file' => '/app/phalcon/Assets/Asset/Css.zep',
                'line' => 32,
                'char' => 88,
              ),
              'file' => '/app/phalcon/Assets/Asset/Css.zep',
              'line' => 33,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Phalcon\\Assets\\Asset\\Css constructor
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/app/phalcon/Assets/Asset/Css.zep',
            'line' => 31,
            'char' => 5,
          ),
          'file' => '/app/phalcon/Assets/Asset/Css.zep',
          'line' => 23,
          'last-line' => 34,
          'char' => 19,
        ),
      ),
      'file' => '/app/phalcon/Assets/Asset/Css.zep',
      'line' => 18,
      'char' => 5,
    ),
    'file' => '/app/phalcon/Assets/Asset/Css.zep',
    'line' => 18,
    'char' => 5,
  ),
);