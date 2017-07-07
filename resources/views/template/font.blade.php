<?php
    $raleway = [
        '100' => 'Thin',
        '200' => 'ExtraLight',
        '300' => 'Light',
        '400' => [
            'normal' => 'Regular',
            'italic' => 'Italic',
        ],
        '500' => 'Medium',
        '600' => 'SemiBold',
        '700' => 'Bold',
        '800' => 'ExtraBold',
        '900' => 'Black',
    ];
?>
<style>
@foreach ($raleway as $weight => $font)
    <?php
        $_font = is_array($font)?$font['normal']:$font;
        $_fontItalic = is_array($font)?$font['italic']:($font.'Italic');
    ?>
    @font-face {
        font-family: 'Raleway';
        src: url({{ asset(
            '/font/Raleway/Raleway-'.$_font.'.ttf'
        ) }});
        font-weight: {{ $weight }};
    }
    @font-face {
        font-family: 'Raleway';
        src: url({{ asset(
            '/font/Raleway/Raleway-'.$_fontItalic.'.ttf'
        ) }});
        font-weight: {{ $weight }};
        font-style: italic;
    }
@endforeach
</style>

<style>
    @font-face {
        font-family: 'qalammajeed';
        src: url({{ asset(
            '/font/qalammajeed.ttf'
        ) }});
    }
</style>
