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
    'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
    'line' => 11,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'Phalcon\\Validation\\Validator',
    'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
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
        'name' => 'Phalcon\\Validation\\Validation',
        'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
        'line' => 13,
        'char' => 34,
      ),
    ),
    'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
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
        'name' => 'Phalcon\\Validation\\AbstractValidator',
        'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
        'line' => 14,
        'char' => 41,
      ),
    ),
    'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
    'line' => 49,
    'char' => 2,
  ),
  4 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Check for alphanumeric character(s)
 *
 * ```php
 * use Phalcon\\Validation\\Validation;
 * use Phalcon\\Validation\\Validator\\Alnum as AlnumValidator;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "username",
 *     new AlnumValidator(
 *         [
 *             "message" => ":field must contain only alphanumeric characters",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "username",
 *         "name",
 *     ],
 *     new AlnumValidator(
 *         [
 *             "message" => [
 *                 "username" => "username must contain only alphanumeric characters",
 *                 "name"     => "name must contain only alphanumeric characters",
 *             ],
 *         ]
 *     )
 * );
 * ```
 *',
    'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
    'line' => 50,
    'char' => 5,
  ),
  5 => 
  array (
    'type' => 'class',
    'name' => 'Alnum',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractValidator',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'template',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'Field :field must contain only letters and numbers',
            'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
            'line' => 52,
            'char' => 76,
          ),
          'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
          'line' => 56,
          'char' => 6,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'validate',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'validation',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'Validation',
                'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                'line' => 57,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
              'line' => 57,
              'char' => 53,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'field',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
              'line' => 57,
              'char' => 64,
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
                  'variable' => 'value',
                  'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                  'line' => 59,
                  'char' => 18,
                ),
              ),
              'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
              'line' => 61,
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
                  'variable' => 'value',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'validation',
                      'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                      'line' => 61,
                      'char' => 32,
                    ),
                    'name' => 'getValue',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'field',
                          'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                          'line' => 61,
                          'char' => 47,
                        ),
                        'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                        'line' => 61,
                        'char' => 47,
                      ),
                    ),
                    'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                    'line' => 61,
                    'char' => 48,
                  ),
                  'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                  'line' => 61,
                  'char' => 48,
                ),
              ),
              'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
              'line' => 63,
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
                  'type' => 'fcall',
                  'name' => 'ctype_alnum',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                        'line' => 63,
                        'char' => 30,
                      ),
                      'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                      'line' => 63,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                  'line' => 63,
                  'char' => 32,
                ),
                'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                'line' => 63,
                'char' => 32,
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
                      'value' => 'validation',
                      'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                      'line' => 64,
                      'char' => 24,
                    ),
                    'name' => 'appendMessage',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                            'line' => 65,
                            'char' => 22,
                          ),
                          'name' => 'messageFactory',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'validation',
                                'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                                'line' => 65,
                                'char' => 48,
                              ),
                              'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                              'line' => 65,
                              'char' => 48,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'field',
                                'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                                'line' => 65,
                                'char' => 55,
                              ),
                              'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                              'line' => 65,
                              'char' => 55,
                            ),
                          ),
                          'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                          'line' => 66,
                          'char' => 13,
                        ),
                        'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                        'line' => 66,
                        'char' => 13,
                      ),
                    ),
                    'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                    'line' => 66,
                    'char' => 14,
                  ),
                  'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                  'line' => 68,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                    'line' => 68,
                    'char' => 25,
                  ),
                  'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                  'line' => 69,
                  'char' => 9,
                ),
              ),
              'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
              'line' => 71,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                'line' => 71,
                'char' => 20,
              ),
              'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
              'line' => 72,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Executes the validation
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
                'line' => 58,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
            'line' => 58,
            'char' => 5,
          ),
          'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
          'line' => 57,
          'last-line' => 73,
          'char' => 19,
        ),
      ),
      'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
      'line' => 50,
      'char' => 5,
    ),
    'file' => '/app/phalcon/Validation/Validator/Alnum.zep',
    'line' => 50,
    'char' => 5,
  ),
);