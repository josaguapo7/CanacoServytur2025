<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Canaco Servytur San Cristobal</title>
        <link rel="icon" type="image/png" href="{{ asset('imagenes/canaco.png') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>

<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
  <div class="max-w-screen-xl flex flex-wrap justify-between items-center p-4">
    <a class="flex items-center space-x-8 rtl:space-x-reverse">
      <img src="https://concanacodigital.s3.amazonaws.com/establecimientos/135.20220228113405.png" class="h-16" alt="">
      <span class="self-center text-4xl font-semibold whitespace-nowrap font-sans">Canaco</span>
    </a>
    <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
    <div class="hidden md:flex md:w-auto md:order-1 items-center">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
        <li>
          <a href="sobrenosotros" class="block py-2 px-3 text-gl text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">Sobre nosotros</a>
        </li>
        <li>
          <a href="afiliarte" class="block py-2 px-3 text-gl text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">¿Quieres afiliarte?</a>
        </li>
        <li>
          <a href="servicios" class="block py-2 px-3 text-gl text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">Nuestros Servicios</a>
        </li>
        <li>
          <a href="#contacto" class="block py-2 px-3 text-gl text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">Contáctanos</a>
        </li>
      </ul>
      <a href="{{ route('login') }}" class="ml-10 px-4 py-2 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-all shadow-md">
        Acceder
      </a>
    </div>
  </div>
</nav>

<script>
  document.getElementById("menu-toggle").addEventListener("click", function() {
    document.getElementById("navbar-sticky").classList.toggle("hidden");
  });
</script>

<section class="relative w-full h-[500px] md:h-[600px] lg:h-[700px] bg-gray-900 text-white flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-60" style="background-image: url('https://www.monitoratec.com.br/blog/wp-content/uploads/2020/12/AdobeStock_332234118-min-740x416.jpeg');"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 to-transparent"></div>
    <div class="relative z-10 text-center max-w-2xl px-6">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight drop-shadow-lg">
            Impulsamos el crecimiento de tu negocio
        </h1>
        <p class="mt-4 text-lg md:text-xl lg:text-2xl drop-shadow-md">
            Únete a CANACO y accede a beneficios exclusivos.
        </p>
        <a href="afiliarte" class="mt-6 inline-block bg-blue-900 hover:bg-blue-500
         text-white font-semibold py-3 px-6 md:py-4 md:px-8 lg:py-5 lg:px-10 rounded-lg shadow-lg transition-all transform hover:scale-105">
            Afíliate ahora
        </a>
    </div>
</section>
<a href="#" class="flex flex-col md:flex-row items-center bg-white border border-gray-300 rounded-lg shadow-lg max-w-5xl hover:shadow-xl transition-all duration-300 mx-auto mt-20 mb-10">
    <div class="w-full md:w-1/2 h-72 md:h-auto overflow-hidden rounded-t-lg md:rounded-l-lg">
        <img class="object-cover w-full h-full" src="{{ asset('imagenes/canaco camara.jpeg') }}">
    </div>
    <div class="flex flex-col justify-between p-6 leading-relaxed w-full md:w-1/2">
        <h5 class="mb-4 text-3xl font-extrabold tracking-wide text-gray-900">
            CANACO SERVYTUR &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  SAN CRISTOBAL DE LAS CASAS
        </h5>
        <p class="mb-4 text-justify text-xl text-gray-600">
            La misión de Canaco Servytur SCLC es representar, defender y promover los intereses legítimos del comercio, los servicios y el turismo, ante las autoridades municipales, estatales y federales.
        </p>
    </div>
</a>
<section class="bg-gradient-to-b from-white to-blue-50 py-16">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-16 text-center">
    <div class="mb-15">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-black">Nuestro Impacto en el Comercio Local</h2>
      <p class="text-black mt-5">Resultados que nos respaldan: Creciendo juntos cada día</p>
      <div class="w-24 h-1 bg-blue-900 mx-auto mt-3 rounded"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-10 mb-10 gap-8 text-center">
      <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center justify-center text-center">
        <img src="{{ asset('imagenes/edificio.png') }}" alt="Icono de edificio" class="w-20 h-20 mb-4">
        <h2 class="text-4xl mt-4 font-extrabold">+350</h2>
        <p class="text-lg mt-2">Negocios afiliados</p>
      </div>
      <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center justify-center text-center">
        <img src="{{ asset('imagenes/reloj.png') }}" alt="reloj icono" class="w-20 h-20 mb-4">
        <h2 class="text-4xl mt-4 font-extrabold">+100 años</h2>
        <p class="text-lg mt-2">Apoyando al comercio local</p>
      </div>
      <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center justify-center text-center">
        <img src="{{ asset('imagenes/curso.png') }}" alt="curso icono" class="w-20 h-20 mb-4">
        <h2 class="text-4xl mt-4 font-extrabold">+50</h2>
        <p class="text-lg mt-2">Eventos y capacitaciones</p>
      </div>
    </div>
    <div class="mt-10">
      <a href="afiliarte" class="bg-blue-900 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-blue-800 transition">¡Quiero ser parte!</a>
    </div>
  </div>
</section>

<center><h3 class="text-gray-500 text-xl font-family: 'Poppins', sans-serif; mt-20 mb-5">HAZ TU ELECCIÓN</h3></center>
<center><h1 class="text-4xl font-extrabold font-[Bebas_Neue] uppercase tracking-widest">Lista de Precios del SIEM</h1></center>

<div class="grid grid-cols-1 md:grid-cols-2 mt-10 lg:grid-cols-3 gap-6 p-6">
    <div class="bg-gradient-to-br from-white to-blue-200 text-blue-900 p-6 rounded-lg shadow-lg text-center">
        <h3 class="text-xl font-bold">0 - 2 empleados</h3>
        <p class="text-lg mt-2">Cámara: <strong>$1,100.00</strong></p>
        <p class="text-lg">SIEM: <strong>$100.00</strong></p>
        <p class="text-2xl font-bold mt-2">Total: $1,200.00</p>
        <a href="afiliarte" class="inline-block mt-4 px-4 py-2 bg-blue-900 text-white font-bold rounded-md transition-all duration-300 ease-in-out transform hover:bg-blue-700 hover:scale-105 hover:opacity-90">
            Más Información
        </a>
    </div>
    <div class="bg-gradient-to-br from-blue-900 to-blue-700 text-white p-6 rounded-lg shadow-lg text-center">
        <h3 class="text-xl font-bold">3 empleados</h3>
        <p class="text-lg mt-2">Cámara: <strong>$1,550.00</strong></p>
        <p class="text-lg">SIEM: <strong>$300.00</strong></p>
        <p class="text-2xl font-bold mt-2">Total: $1,850.00</p>
        <a href="afiliarte" class="inline-block mt-4 px-4 py-2 bg-white text-blue-900 font-bold rounded-md transition-all duration-300 ease-in-out transform hover:bg-gray-200 hover:scale-105 hover:opacity-90">
            Más Información
        </a>
    </div>
    <div class="bg-gradient-to-br from-white to-blue-200 text-blue-900 p-6 rounded-lg shadow-lg text-center">
        <h3 class="text-xl font-bold">4 - 10 empleados</h3>
        <p class="text-lg mt-2">Cámara: <strong>$1,910.00</strong></p>
        <p class="text-lg">SIEM: <strong>$640.00</strong></p>
        <p class="text-2xl font-bold mt-2">Total: $2,550.00</p>
        <a href="afiliarte" class="inline-block mt-4 px-4 py-2 bg-blue-900 text-white font-bold rounded-md transition-all duration-300 ease-in-out transform hover:bg-blue-700 hover:scale-105 hover:opacity-90">
            Más Información
        </a>
    </div>
</div>
<div class="relative flex flex-col md:flex-row w-full my-6 bg-white mt-32 shadow-sm border border-slate-200 rounded-lg">
    <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
        <img
            src="{{ asset('imagenes/fachada.jpeg') }}"
            alt="card-image"
            class="h-full w-full rounded-md md:rounded-lg object-cover"
        />
    </div>
    <div class="p-6 flex flex-col justify-between w-full">
        <div>

            <center><h3 class="mb-2 text-slate-800 text-xl font-semibold">

            </h3>
            </h3></center>
        </div>
        <div class="w-full h-64 rounded-lg overflow-hidden shadow-md my-4">
            <iframe
                class="w-full h-full border-0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.9941938385396!2d-92.64190912614873!3d16.727141521492175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed4515547feb2b%3A0xb009eb6939abb824!2sCanaco!5e0!3m2!1sen!2smx!4v1740270324398!5m2!1sen!2smx"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div>
            <a href="https://maps.app.goo.gl/P2pUvj2tQCEECdun7"
            target="_blank"
               class="text-teal-600 font-semibold text-sm hover:underline flex items-center">
                Cómo llegar
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

<div id="contacto" class="max-w-1xl mt-10 mx-auto p-1 md:p-6"> 
    <div class="grid md:grid-cols-2 gap-8 items-start mt-20">
        <div class="bg-gray-50 rounded-lg p-6">
            <h2 class="text-3xl font-bold text-indigo-900 mb-4">CANACO SERVYTUR</h2>
            <p class="text-gray-600 mb-8 text-sm">¿Tienes dudas o quieres afiliarte? Contáctanos y con gusto te atenderemos.</p>
            <form action="{{ route('enviar.formulario') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <input type="text" name="nombre" placeholder="Nombre" required class="w-full p-3 rounded-lg bg-white border text-sm border-gray-200 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none" />
                    <input type="email" name="email" placeholder="E-mail" required class="w-full p-3 rounded-lg bg-white border text-sm border-gray-200 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none" />
                    <textarea name="mensaje" placeholder="Mensaje" required rows="4" class="w-full p-3 rounded-lg bg-white border text-sm border-gray-200 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none resize-none"></textarea>
                    <button type="submit" class="w-full text-sm bg-blue-700 hover:bg-blue-900 text-white font-semibold py-3 px-6 rounded-lg transition-colors">Enviar</button>
                </div>
            </form>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-lg p-6 shadow">
                <h3 class="text-xl font-semibold text-indigo-900 mb-6">Información de Contacto</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-900" viewBox="0 0 64 64">
                            <path d="M32 0A24.032 24.032 0 0 0 8 24c0 17.23 22.36 38.81 23.31 39.72a.99.99 0 0 0 1.38 0C33.64 62.81 56 41.23 56 24A24.032 24.032 0 0 0 32 0zm0 35a11 11 0 1 1 11-11 11.007 11.007 0 0 1-11 11z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm mb-1">Nuestra ubicación</h4>
                            <p class="text-gray-600 text-sm">Crescencio Rosas 61, Barrio de San Diego</p>
                            <p class="text-gray-600 text-sm">29270 San Cristóbal de las Casas, Chis.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-900" viewBox="0 0 513.64 513.64">
                            <path d="m499.66 376.96-71.68-71.68c-25.6-25.6-69.12-15.359-79.36 17.92-7.68 23.041-33.28 35.841-56.32 30.72-51.2-12.8-120.32-79.36-133.12-133.12-7.68-23.041 7.68-48.641 30.72-56.32 33.28-10.24 43.52-53.76 17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12 0L18.38 62.08c-48.64 51.2 5.12 186.88 125.44 307.2s256 176.641 307.2 125.44l48.64-48.64c17.921-20.48 17.921-51.2 0-69.12z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm mb-1">Teléfono</h4>
                            <p class="text-gray-600 text-sm">967 678 07 67</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-900" viewBox="0 0 512 512">
                            <path d="M298.789 313.693c-12.738 8.492-27.534 12.981-42.789 12.981-15.254 0-30.05-4.489-42.788-12.981L3.409 173.82A76.269 76.269 0 0 1 0 171.403V400.6c0 26.278 21.325 47.133 47.133 47.133h417.733c26.278 0 47.133-21.325 47.133-47.133V171.402a75.21 75.21 0 0 1-3.416 2.422z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm mb-1">Email</h4>
                            <p class="text-gray-600 text-sm">Canacoservytur@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg p-6 shadow">
                <h3 class="text-xl font-semibold text-indigo-900 mb-6">Horario de Atención</h3>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600 text-sm">Lunes - Viernes</span>
                        <span class="text-gray-800 text-sm">9:00 AM - 7:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 text-sm">Sábado</span>
                        <span class="text-gray-800 text-sm">9:00 AM - 12:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 text-sm">Domingo</span>
                        <span class="text-gray-800 text-sm">Cerrado</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="pt-16 pb-7 px-2 w-full">
    <div class="w-full px-4 lg:px-12 p-12 rounded-2xl bg-neutral-100">
      <div class="flex flex-col min-[830px]:flex-row items-center justify-between gap-6 pb-10 border-b-2 border-gray-200">
        <a href="https://pagedone.io/" class="py-1.5">
          <!-- SVG Logo -->
        </a>
        <nav class="flex flex-wrap justify-center space-x-4 text-gray-600">
        <a href="http://127.0.0.1:8000/" class="hover:text-gray-900">Inicio</a>
          <a href="sobrenosotros" class="hover:text-gray-900">Sobre Nosotros</a>
          <a href="afiliarte" class="hover:text-gray-900">Quieres Afiliarte</a>
          <a href="#" class="hover:text-gray-900">Nuestros Servicios</a>
          <a href="#contacto" class="hover:text-gray-900">Contacto</a>
        </nav>
      </div>
      <div class="flex flex-col sm:flex-row justify-between items-center mt-6 text-gray-500 text-sm">
        <p>CANACO 2025 Todos los derechos reservados.</p>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-900">Privacidad</a>
          <a href="#" class="hover:text-gray-900">Términos</a>
        </div>
      </div>
    </div>
</section>