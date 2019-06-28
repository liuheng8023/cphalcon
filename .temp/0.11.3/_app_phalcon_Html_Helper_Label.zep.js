[
    {
        "type": "comment",
        "value": "**\n * This file is part of the Phalcon Framework.\n *\n * (c) Phalcon Team <team@phalconphp.com>\n *\n * For the full copyright and license information, please view the LICENSE.txt\n * file that was distributed with this source code.\n *",
        "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
        "line": 11,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "Phalcon\\Html\\Helper",
        "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
        "line": 13,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Html\\Exception",
                "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                "line": 13,
                "char": 27
            }
        ],
        "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
        "line": 19,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Phalcon\\Html\\Helper\\Label\n *\n * Creates a label\n *",
        "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
        "line": 20,
        "char": 5
    },
    {
        "type": "class",
        "name": "Label",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractHelper",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__invoke",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "attributes",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "empty-array",
                                "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                                "line": 28,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                            "line": 28,
                            "char": 52
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                                    "line": 30,
                                    "char": 21
                                },
                                "name": "renderElement",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "label",
                                            "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                                            "line": 30,
                                            "char": 41
                                        },
                                        "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                                        "line": 30,
                                        "char": 41
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "attributes",
                                            "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                                            "line": 30,
                                            "char": 53
                                        },
                                        "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                                        "line": 30,
                                        "char": 53
                                    }
                                ],
                                "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                                "line": 30,
                                "char": 54
                            },
                            "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                            "line": 31,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param array $attributes Any additional attributes\n     *\n     * @return string\n     * @throws Exception\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                                "line": 29,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                        "line": 29,
                        "char": 5
                    },
                    "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
                    "line": 28,
                    "last-line": 32,
                    "char": 19
                }
            ],
            "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
            "line": 20,
            "char": 5
        },
        "file": "\/app\/phalcon\/Html\/Helper\/Label.zep",
        "line": 20,
        "char": 5
    }
]