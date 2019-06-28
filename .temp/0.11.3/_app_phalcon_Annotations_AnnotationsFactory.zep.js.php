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
    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
    'line' => 11,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'Phalcon\\Annotations',
    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
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
        'name' => 'Phalcon\\Annotations\\Adapter\\AbstractAdapter',
        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
        'line' => 13,
        'char' => 48,
      ),
    ),
    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
    'line' => 14,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Factory\\AbstractFactory',
        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
        'line' => 14,
        'char' => 36,
      ),
    ),
    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
    'line' => 15,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Helper\\Arr',
        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
        'line' => 15,
        'char' => 23,
      ),
    ),
    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
    'line' => 19,
    'char' => 2,
  ),
  5 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Factory to create annotations components
 *',
    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
    'line' => 20,
    'char' => 5,
  ),
  6 => 
  array (
    'type' => 'class',
    'name' => 'AnnotationsFactory',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractFactory',
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
              'name' => 'services',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 25,
                'char' => 53,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 25,
              'char' => 53,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 27,
                  'char' => 14,
                ),
                'name' => 'init',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'services',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 27,
                      'char' => 28,
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 27,
                    'char' => 28,
                  ),
                ),
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 27,
                'char' => 29,
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 28,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * AdapterFactory constructor.
     *',
          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
          'line' => 25,
          'last-line' => 32,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'load',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'config',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 33,
              'char' => 36,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'name',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 35,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'options',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 35,
                  'char' => 26,
                ),
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 37,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 37,
                      'char' => 27,
                    ),
                    'name' => 'checkConfig',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                          'line' => 37,
                          'char' => 46,
                        ),
                        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                        'line' => 37,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 37,
                    'char' => 47,
                  ),
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 37,
                  'char' => 47,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'name',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 38,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'adapter',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 38,
                      'char' => 36,
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 38,
                    'char' => 37,
                  ),
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 38,
                  'char' => 37,
                ),
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 40,
              'char' => 13,
            ),
            2 => 
            array (
              'type' => 'unset',
              'expr' => 
              array (
                'type' => 'array-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'config',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 40,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'adapter',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 40,
                  'char' => 29,
                ),
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 40,
                'char' => 30,
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 42,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'options',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'Arr',
                    'dynamic' => 0,
                    'name' => 'get',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                          'line' => 42,
                          'char' => 38,
                        ),
                        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                        'line' => 42,
                        'char' => 38,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'options',
                          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                          'line' => 42,
                          'char' => 47,
                        ),
                        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                        'line' => 42,
                        'char' => 47,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'empty-array',
                          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                          'line' => 42,
                          'char' => 51,
                        ),
                        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                        'line' => 42,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 42,
                    'char' => 52,
                  ),
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 42,
                  'char' => 52,
                ),
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 44,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 44,
                  'char' => 21,
                ),
                'name' => 'newInstance',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 44,
                      'char' => 38,
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 44,
                    'char' => 38,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 44,
                      'char' => 47,
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 44,
                    'char' => 47,
                  ),
                ),
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 44,
                'char' => 48,
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 45,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Factory to create an instace from a Config object
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'variable',
                'mandatory' => 0,
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 34,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
            'line' => 34,
            'char' => 5,
          ),
          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
          'line' => 33,
          'last-line' => 49,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'newInstance',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 50,
              'char' => 45,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'options',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 50,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 50,
              'char' => 66,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'definition',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 52,
                  'char' => 23,
                ),
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 54,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 54,
                  'char' => 14,
                ),
                'name' => 'checkService',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 54,
                      'char' => 32,
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 54,
                    'char' => 32,
                  ),
                ),
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 54,
                'char' => 33,
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 56,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'isset',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                        'line' => 56,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'services',
                        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                        'line' => 56,
                        'char' => 33,
                      ),
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 56,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 56,
                      'char' => 38,
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 56,
                    'char' => 40,
                  ),
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 56,
                  'char' => 40,
                ),
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 56,
                'char' => 40,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'definition',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                            'line' => 57,
                            'char' => 45,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'mapper',
                            'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                            'line' => 57,
                            'char' => 52,
                          ),
                          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                          'line' => 57,
                          'char' => 52,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'name',
                          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                          'line' => 57,
                          'char' => 57,
                        ),
                        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                        'line' => 57,
                        'char' => 58,
                      ),
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 57,
                      'char' => 58,
                    ),
                    1 => 
                    array (
                      'assign-type' => 'object-property-array-index',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'services',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'name',
                          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                          'line' => 58,
                          'char' => 36,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'definition',
                        'dynamic' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'options',
                              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                              'line' => 58,
                              'char' => 64,
                            ),
                            'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                            'line' => 58,
                            'char' => 64,
                          ),
                        ),
                        'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                        'line' => 58,
                        'char' => 65,
                      ),
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 58,
                      'char' => 65,
                    ),
                  ),
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 59,
                  'char' => 9,
                ),
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 61,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'array-access',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 61,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'services',
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 61,
                    'char' => 30,
                  ),
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 61,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'name',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 61,
                  'char' => 35,
                ),
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 61,
                'char' => 36,
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 62,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Create a new instance of the adapter
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => 'AbstractAdapter',
                  'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                  'line' => 51,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 51,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
            'line' => 51,
            'char' => 5,
          ),
          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
          'line' => 50,
          'last-line' => 66,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getAdapters',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'array',
                'left' => 
                array (
                  0 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'apcu',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 70,
                      'char' => 20,
                    ),
                    'value' => 
                    array (
                      'type' => 'string',
                      'value' => '\\\\Phalcon\\\\Annotations\\\\Adapter\\\\Apcu',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 70,
                      'char' => 59,
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 70,
                    'char' => 59,
                  ),
                  1 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'memory',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 71,
                      'char' => 20,
                    ),
                    'value' => 
                    array (
                      'type' => 'string',
                      'value' => '\\\\Phalcon\\\\Annotations\\\\Adapter\\\\Memory',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 71,
                      'char' => 61,
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 71,
                    'char' => 61,
                  ),
                  2 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'stream',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 72,
                      'char' => 20,
                    ),
                    'value' => 
                    array (
                      'type' => 'string',
                      'value' => '\\\\Phalcon\\\\Annotations\\\\Adapter\\\\Stream',
                      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                      'line' => 73,
                      'char' => 9,
                    ),
                    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                    'line' => 73,
                    'char' => 9,
                  ),
                ),
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 73,
                'char' => 10,
              ),
              'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
              'line' => 74,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * The available adapters
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
                'line' => 68,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
            'line' => 68,
            'char' => 5,
          ),
          'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
          'line' => 67,
          'last-line' => 75,
          'char' => 22,
        ),
      ),
      'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
      'line' => 20,
      'char' => 5,
    ),
    'file' => '/app/phalcon/Annotations/AnnotationsFactory.zep',
    'line' => 20,
    'char' => 5,
  ),
);