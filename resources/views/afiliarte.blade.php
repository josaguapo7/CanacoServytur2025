<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Canaco Servytur San Cristobal</title>
        <link rel="icon" type="image/png" href="{{ asset('imagenes/canaco.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script>
            function calcularCuota() {
                let empleados = parseInt(document.getElementById('empleados').value);
                let camara = 0, siem = 0, total = 0;

                if (empleados >= 0 && empleados <= 2) {
                    camara = 1100; siem = 100;
                } else if (empleados === 3) {
                    camara = 1550; siem = 300;
                } else if (empleados >= 4 && empleados <= 10) {
                    camara = 1910; siem = 640;
                } else if (empleados >= 10 && empleados <= 20) {
                    camara = 2460; siem = 640;
                } else if (empleados >= 20 && empleados <= 30) {
                    camara = 3160; siem = 640;
                } else if (empleados >= 30 && empleados <= 40) {
                    camara = 3860; siem = 640;
                } else if (empleados > 40) {
                    camara = 6360; siem = 640;
                }

                total = camara + siem;
                document.getElementById('resultado').innerHTML = `Cámara: $${camara.toFixed(2)} <br> SIEM: $${siem.toFixed(2)} <br> Total: $${total.toFixed(2)}`;
            }
        </script>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>



    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap  justify-between  p-4">
    <a href="index" class="flex items-center space-x-8 rtl:space-x-reverse">
        <img src="https://concanacodigital.s3.amazonaws.com/establecimientos/135.20220228113405.png" class="h-16" alt="">
        <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white font-sans">Canaco</span>
    </a>

    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="http://127.0.0.1:8000/" class="block py-2 px-3 text-gl text-black bg-blue-700 rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300" aria-current="page">
                Inicio
            </a>
        </li>
        <li>
          <a href="sobrenosotros" class="block py-2 px-3 text-gl text-black bg-blue-700 rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300" aria-current="page">Sobre Nosotros</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gl text-black bg-blue-700 rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300" aria-current="page">Nuestros Servicios</a>
        </li>
        
      </ul>
    </div>
    </div>
</nav>

<!-- Script para mostrar/ocultar el menú -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("menu");

        menuToggle.addEventListener("click", function() {
            menu.classList.toggle("hidden"); // Alterna la visibilidad del menú
        });
    });
</script>

<body>

<br><br><br><br><br>
<div class="max-w-7xl mx-auto px-6 py-12">
    <h2 class="text-4xl font-bold text-center mb-4">Beneficios de Afiliación</h2>
    <p class="text-center text-lg text-gray-600 mb-10">
        Al afiliarte a CANACO, obtendrás acceso a múltiples beneficios para fortalecer tu negocio.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Asesoría Empresarial -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://thumbs.dreamstime.com/b/asesoramiento-jur%C3%ADdico-para-ilustraciones-de-vectores-dibujos-animados-aislados-por-empresas-abogada-que-ayuda-la-empresa-en-253366108.jpg" alt="Asesoría Empresarial" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Asesoría Empresarial</h3>
            <p class="text-gray-600 mt-2">Recibe asesoría en temas fiscales, legales y administrativos para tu empresa.</p>
        </div>

        <!-- Capacitación Continua -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://png.pngtree.com/png-clipart/20230825/original/pngtree-consulting-clients-isolated-cartoon-vector-illustrations-picture-image_8710496.png" alt="Capacitación Continua" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Capacitación Continua</h3>
            <p class="text-gray-600 mt-2">Accede a cursos, talleres y conferencias exclusivas para mejorar tu negocio.</p>
        </div>

        <!-- Red de Contactos -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://media.istockphoto.com/id/930420128/es/vector/ilustraci%C3%B3n-de-comunicaci%C3%B3n-global-de-las-personas.jpg?s=612x612&w=0&k=20&c=uxZPfZlIM9n40Aaocj2jvLXe08RnZ_CruEifXkxmSBw=" alt="Red de Contactos" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Red de Contactos</h3>
            <p class="text-gray-600 mt-2">Conéctate con otras empresas y amplía tus oportunidades de negocio.</p>
        </div>

        <!-- Promoción y Publicidad -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://img.freepik.com/vector-gratis/imagenes-predisenadas-promocion-marketing-ilustradas_52683-74351.jpg" alt="Promoción y Publicidad" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Promoción y Publicidad</h3>
            <p class="text-gray-600 mt-2">Destaca tu empresa en nuestros directorios y eventos empresariales.</p>
        </div>

        <!-- Acceso a Financiamiento -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://st2.depositphotos.com/2419757/8513/v/450/depositphotos_85136908-stock-illustration-concept-crowd-funding-banknotes-and.jpg" alt="Acceso a Financiamiento" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Acceso a Financiamiento</h3>
            <p class="text-gray-600 mt-2">Obtén información sobre créditos y apoyos gubernamentales para tu empresa.</p>
        </div>

        <!-- Representación y Defensa -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://static.vecteezy.com/system/resources/previews/003/774/320/non_2x/lawyer-rgb-color-icon-attorney-advocate-legal-representative-trial-courthouse-legislature-law-enforcement-justice-legal-assistance-isolated-illustration-vector.jpg" alt="Representación y Defensa" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Representación y Defensa</h3>
            <p class="text-gray-600 mt-2">CANACO te representa ante organismos gubernamentales y regula intereses del sector.</p>
        </div>
    </div>
</div>


    <div class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-4xl font-bold text-center mb-6">Requisitos para Afiliarte</h2>
    <p class="text-center text-lg text-gray-600 mb-8">
        Para unirte a CANACO y disfrutar de todos sus beneficios, es necesario cumplir con los siguientes requisitos:
    </p>

    <div class="bg-white p-6 shadow-lg rounded-lg">
        <ul class="list-disc list-inside space-y-4 text-gray-700">
            <li><span class="font-semibold">Llenar formatos de CAMARA y SIEM:</span> Formatos oficiales requeridos para el registro.</li>
            <li><span class="font-semibold">Constancia de situación fiscal vigente:</span> Documento actualizado emitido por el SAT.</li>
            <li><span class="font-semibold">Comprobante de domicilio:</span> Recibo de luz, agua o teléfono.</li>
            <li><span class="font-semibold">INE del propietario o representante legal:</span> Identificación oficial vigente.</li>
            <li><span class="font-semibold">Copia del último pago del IMSS:</span> Documento que avala el cumplimiento de las obligaciones ante el IMSS.</li>
            <li><span class="font-semibold">Copia de Acta Constitutiva (solo para personas morales):</span> Documento que acredita la constitución legal de la empresa.</li>
        </ul>
    </div>
</div>



<br><br><br>
<h2 class="text-4xl font-bold text-center">Simula tu Cuota de Afiliación</h2>
    <p class="text-center text-lg text-gray-600 mt-2">
    Obtén en segundos el costo de inscripción y mantenimiento en CANACO según el número de empleados de tu negocio
    </p>

    <div class="mt-10 w-full flex items-center justify-center p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-screen-xl grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col justify-center text-center md:text-left p-4">
                <h1 class="text-2xl font-bold mb-4 text-gray-800">Calcula tus Cuotas de CANACO</h1>
                <p class="text-gray-600 text-lg">Ingresa la cantidad de empleados de tu empresa para conocer el monto total a pagar en la Cámara y el SIEM.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-inner text-center">
                <label for="empleados" class="block text-lg font-medium text-gray-700 mb-2">Número de empleados:</label>
                <input type="number" id="empleados" class="border rounded-lg p-3 w-full mb-4 text-center" min="0" oninput="calcularCuota()">
                <div id="resultado" class="text-lg font-semibold text-gray-800"></div>
            </div>
        </div>
    </div>

<br><br>
<div class="bg-white shadow-md rounded-lg p-6 text-center">
    <h2 class="text-xl font-bold text-gray-800">Descarga tus Documentos</h2>
    <p class="text-gray-600 mt-2">
        Toca la imagen para descargar el documento que necesitas.
    </p>

    <div class="mt-10 mb-5 flex flex-col sm:flex-row justify-center gap-6">
        <!-- Imagen para descargar Documento 1 -->
         
        <a href="#" download>
            <img src="https://cdn.iconscout.com/icon/free/png-256/free-microsoft-excel-1868959-1583123.png?f=webp" alt="Descargar Documento 1" class="w-16 h-16 cursor-pointer transition-transform transform hover:scale-110">
        </a>

        <!-- Imagen para descargar Documento 2 -->
        <a href="#" download>
            <img src="https://cdn-icons-png.flaticon.com/256/337/337946.png" alt="Descargar Documento 2" class="w-16 h-16 ml-10 cursor-pointer transition-transform transform hover:scale-110">
        </a>
    </div>
</div>




</body>
    <section class="pt-16 pb-7 px-2 w-full">
    <div class="w-full px-4 lg:px-12 p-12 rounded-2xl bg-neutral-100">
      <div class="flex flex-col min-[830px]:flex-row items-center justify-between gap-6 pb-10 border-b-2 border-gray-200">
        <a href="https://pagedone.io/" class="py-1.5">
          <!-- SVG Logo -->
        </a>
        <nav class="flex flex-wrap justify-center space-x-4 text-gray-600">
          <a href="#" class="hover:text-gray-900">Inicio</a>
          <a href="#" class="hover:text-gray-900">Nosotros</a>
          <a href="#" class="hover:text-gray-900">Servicios</a>
          <a href="#" class="hover:text-gray-900">Contacto</a>
        </nav>
      </div>
      <div class="flex flex-col sm:flex-row justify-between items-center mt-6 text-gray-500 text-sm">
        <p>© 2024 Todos los derechos reservados.</p>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-900">Privacidad</a>
          <a href="#" class="hover:text-gray-900">Términos</a>
        </div>
      </div>
    </div>
  </section>
</html>
