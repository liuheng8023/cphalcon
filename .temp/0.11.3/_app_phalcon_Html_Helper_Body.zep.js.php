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
    'file' => '/app/phalcon/Html/Helper/Body.zep',
    'line' => 11,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'Phalcon\\Html\\Helper',
    'file' => '/app/phalcon/Html/Helper/Body.zep',
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
        'name' => 'Phalcon\\Html\\Helper\\AbstractHelper',
        'file' => '/app/phalcon/Html/Helper/Body.zep',
        'line' => 13,
        'char' => 39,
      ),
    ),
    'file' => '/app/phalcon/Html/Helper/Body.zep',
    'line' => 19,
    'char' => 2,
  ),
  3 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Phalcon\\Html\\Helper\\Body
 *
 * Creates a body tag
 *',
    'file' => '/app/phalcon/Html/Helper/Body.zep',
    'line' => 20,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Body',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractHelper',
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
          'name' => '__invoke',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'attributes',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/app/phalcon/Html/Helper/Body.zep',
                'line' => 25,
                'char' => 51,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Html/Helper/Body.zep',
              'line' => 25,
              'char' => 51,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/app/phalcon/Html/Helper/Body.zep',
                  'line' => 27,
                  'char' => 21,
                ),
                'name' => 'renderElement',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'body',
                      'file' => '/app/phalcon/Html/Helper/Body.zep',
                      'line' => 27,
                      'char' => 40,
                    ),
                    'file' => '/app/phalcon/Html/Helper/Body.zep',
                    'line' => 27,
                    'char' => 40,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'attributes',
                      'file' => '/app/phalcon/Html/Helper/Body.zep',
                      'line' => 27,
                      'char' => 52,
                    ),
                    'file' => '/app/phalcon/Html/Helper/Body.zep',
                    'line' => 27,
                    'char' => 52,
                  ),
                ),
                'file' => '/app/phalcon/Html/Helper/Body.zep',
                'line' => 27,
                'char' => 53,
              ),
              'file' => '/app/phalcon/Html/Helper/Body.zep',
              'line' => 28,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @var array  attributes Any additional attributes
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/app/phalcon/Html/Helper/Body.zep',
                'line' => 26,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/app/phalcon/Html/Helper/Body.zep',
            'line' => 26,
            'char' => 5,
          ),
          'file' => '/app/phalcon/Html/Helper/Body.zep',
          'line' => 25,
          'last-line' => 29,
          'char' => 19,
        ),
      ),
      'file' => '/app/phalcon/Html/Helper/Body.zep',
      'line' => 20,
      'char' => 5,
    ),
    'file' => '/app/phalcon/Html/Helper/Body.zep',
    'line' => 20,
    'char' => 5,
  ),
);