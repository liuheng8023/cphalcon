[
    {
        "type": "comment",
        "value": "**\n * This file is part of the Phalcon Framework.\n *\n * (c) Phalcon Team <team@phalconphp.com>\n *\n * For the full copyright and license information, please view the LICENSE.txt\n * file that was distributed with this source code.\n *",
        "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
        "line": 11,
        "char": 9
    },
    {
        "type": "namespace",
        "name": "Phalcon\\Di",
        "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
        "line": 13,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\DiInterface",
                "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
                "line": 13,
                "char": 24
            }
        ],
        "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
        "line": 18,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * This interface must be implemented in those classes that uses internally the\n * Phalcon\\Di that creates them\n *",
        "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
        "line": 19,
        "char": 9
    },
    {
        "type": "interface",
        "name": "InjectionAwareInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setDI",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "container",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "DiInterface",
                                "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
                                "line": 24,
                                "char": 49
                            },
                            "reference": 0,
                            "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
                            "line": 24,
                            "char": 50
                        }
                    ],
                    "docblock": "**\n     * Sets the dependency injector\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
                        "line": 24,
                        "char": 59
                    },
                    "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
                    "line": 24,
                    "last-line": 28,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getDI",
                    "docblock": "**\n     * Returns the internal dependency injector\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "DiInterface",
                                    "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
                                    "line": 29,
                                    "char": 45
                                },
                                "collection": 0,
                                "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
                                "line": 29,
                                "char": 45
                            }
                        ],
                        "void": 0,
                        "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
                        "line": 29,
                        "char": 45
                    },
                    "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
                    "line": 29,
                    "last-line": 30,
                    "char": 19
                }
            ],
            "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
            "line": 30,
            "char": 1
        },
        "file": "\/app\/phalcon\/Di\/InjectionAwareInterface.zep",
        "line": 0,
        "char": 0
    }
]