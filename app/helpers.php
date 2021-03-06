<?php

if (!function_exists('ar')) {
      function ar($number) {
            $numbers = [
                  0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
            ];
            $ars = [
                  '٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩',
            ];
            $stringNumber = strval($number);
            return str_replace($numbers, $ars, $stringNumber);
      }
}

if (!function_exists('clean')) {
    function clean($text) {
        $search = [
            "\u06db\u06da\u06d6",
            "\u06db\u06da",
            "\u06e0",
            "\u0646\u0651\u064e\u0627\u0652",
            " \u0627\u064e\u0646\u064e\u0627",
            "\u0627\u064e\u0646\u064e\u0627\u06e1\u0628\u064e",
            "\u0627\u0652",
            "\u066e\u0655",
            "\u0640\u0655",
            "\u066e\u0655",
            "\u0640\u0654",
            "\u0636\u064f\u0614\u0639\u0652\u0641\u064d",
            "\u0636\u064f\u0614\u0639\u0652\u0641\u064b",
            "\u06df",
            "\ue01a",
            "\ue021",
            "\u200c",
            "\u2002",
            "\u2003",
            "\u0614",
            "\ue01e",
            "\ue01a",
            "\ue01b",
            "\ue01c",
            "\u06d9\u06e2",
            "\u06d6\u06da",
            "\u06d6  \u06da",
            "\u06d6   \u06da",
            "\u06da\u06d9",
            "\u06db\u0615",
            "\u06d6\u06d9",
            "\u06d9\u06da",
            "\u06da\u06d6",
            "\ue01f",
            "\u06d6\u06d9",
            "\u06d6 \u06d9",
            "\u06d6  \u06d9",
            "\u06d9\u06d6",
            "\u06d9 \u06d6",
            "\u06d9  \u06d6",
            "\u06d6\u06d6",
            "\u06d6 \u06d6",
            "\u06d6  \u06d6",
            "\u06d9\u0615",
            "\u06d9 \u0615",
            "\u06d9  \u0615",
            "\u06e6",
            "\u06dc\u064e",
            "\u06db\u06da",
            "\u06da\u06db",
            "\u06db\u06d9",
            "\u0615",
            "\u064e\u0649\u0670",
            "\u0670\u0649\u06e4",
            "\u0649\u0652",
            "\u0649\u0651",
            "\u0649\u0650",
            "\u0649\u064f",
            "\u0649\u064e",
            "\u0649\u064d",
            "\u0649\u064c",
            "\u0649\u064b",
            "\u0649\u0656",
            "\u0649\u0670",
            "\u0627\u064e\u0644\u064e\u0627",
            "\u0643\u064e  \u0643",
            "\u06e8\u0627",
            "\u0644\u0651\u0670\u0653\u0640\u064a\u0650\u0654\u0652",
            "\u06da",
            "\u061e",
            "\u06db",
            "\u06d9",
            "\u06d6",
            "\u06d7",
            "\u0615",
            "\u06e5",
            "\u06d8",
            "\u0617",
            "\u0616",
            "\u0604",
            "\u06e9",
        ];
        array_walk($search, function (&$i) {
            $i = preg_replace('/\\\\u([a-fA-F0-9]{4})/', '&#x\\1;', $i);
            $i = html_entity_decode($i);
        });
        $replace = [
            "\u06db",
            " \u06db ",
            "\u06e1",
            "\u0646\u0651\u064e\u0623\u0652",
            " \u0627\u064e\u0646\u064e\u0627\u06e1",
            "\u0627\u064e\u0646\u064e\u0627\u0628\u064e",
            "\u0623\u0652",
            "\u0626",
            "\u0626",
            "\u0626",
            "\u0626",
            "\u0636\u064e\u0639\u0652\u0641\u064d",
            "\u0636\u064e\u0639\u0652\u0641\u064b",
            "\u06e1",
            "",
            "",
            "",
            "",
            "",
            "",
            "\u06d7",
            "\u06d6",
            "\u06d6",
            "\u06d9",
            "\u06e2",
            "\u06da",
            "\u06da",
            "\u06d6",
            "\u06da",
            "\u06db",
            "\u06d6",
            "\u06d9",
            "\u06d6",
            "\u06d7",
            "\u06d6",
            "\u06d6",
            "\u06d6",
            "\u06d6",
            "\u06d6",
            "\u06d6",
            "\u06d6",
            "\u06d6",
            "\u06d6",
            "\u06d7",
            "\u06d7",
            "\u06d7",
            "\u064a",
            "\u064e\u06dc",
            "\u06db",
            "\u06db",
            "\u06db",
            "\u06d7",
            "\u0670\u0649",
            "\u0670\u06e4\u0649",
            "\u064a\u0652",
            "\u064a\u0651",
            "\u064a\u0650",
            "\u064a\u064f",
            "\u064a\u064e",
            "\u064a\u064d",
            "\u064a\u064c",
            "\u064a\u064b",
            "\u064a\u0656",
            "\u064a\u0670",
            "\u0627\u064e \u0644\u064e\u0627",
            "\u0643\u064e \u0643",
            "\u0627\u06e8 ",
            "\u0644\u0651\u0653\u0640\u0670\u0640\u0626\u0650\u0640\u064a\u0652",
            " \u06da ",
            " \u061e ",
            " \u06db ",
            " \u06d9 ",
            " \u06d6 ",
            " \u06d7 ",
            "  \u0615 ",
            " \u06e5 ",
            " \u06d8 ",
            " \u0617 ",
            " \u0616 ",
            " \u0604 ",
            "",
        ];
        array_walk($replace, function (&$i) {
            $i = preg_replace('/\\\\u([a-fA-F0-9]{4})/', '&#x\\1;', $i);
            $i = html_entity_decode($i);
        });
        $text = str_replace($search, $replace, $text);
        $search = [
            'ۙ',
            'ۗ',
            'ۛ',
            'ۚ',
            ''
        ];
        $replace = $search;
        array_walk($replace, function (&$i) {
            $i = '<span class="ar-mark">' . $i . '</span>';
        });
        $text = str_replace($search, $replace, $text);
        return $text;
    }
}
