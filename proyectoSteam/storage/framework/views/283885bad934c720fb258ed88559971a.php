<aside class="w-50 bg-[#0b111f] h-screen flex flex-col items-center pt-5 pb-2 space-y-7">
    
    <!-- menu items -->
    <div class="w-full pr-3 flex flex-col gap-y-1 text-gray-500 fill-gray-500 text-sm">
        
        <div class="font-QuicksandMedium pl-4 text-gray-400/60 text-xs text-[11px] uppercase">Admin Panel</div>

        <a class="w-full flex items-center gap-x-1.5 group select-none" href="/users">
            <div class="w-1 rounded-xl h-8 bg-transparent transition-colors duration-200 relative overflow-hidden">
                <div class="<?php echo e(request()->routeIs('usuarios.index') ? 'h-8' : 'translate-y-full h-[102%] group-hover:translate-y-0'); ?> absolute top-0 left-0 w-full bg-blue-600 transition-all duration-300"></div>
            </div>
            <div class="<?php echo e(request()->routeIs('usuarios.index') ? 'bg-white/10' : 'group-hover:bg-white/10'); ?> dark:group-hover:text-white group w-full group-active:scale-95 self-stretch pl-2 rounded flex items-center space-x-2 transition-all duration-200 text-sm">
                <svg class="<?php echo e(request()->routeIs('usuarios.index') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600'); ?> h-5 w-5 transition-colors duration-200 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
                <span class="font-QuicksandMedium">Usuarios</span>
            </div>
        </a>

        <a class="w-full flex items-center gap-x-1.5 group select-none" href="/juegos">
            <div class="w-1 rounded-xl h-8 bg-transparent transition-colors duration-200 relative overflow-hidden">
                <div class="<?php echo e(request()->routeIs('juegos.index') ? 'h-8' : 'translate-y-full h-[102%] group-hover:translate-y-0'); ?> absolute top-0 left-0 w-full bg-blue-600 transition-all duration-300"></div>
            </div>
            <div class="<?php echo e(request()->routeIs('juegos.index') ? 'bg-white/10' : 'group-hover:bg-white/10'); ?> dark:group-hover:text-white group w-full group-active:scale-95 self-stretch pl-2 rounded flex items-center space-x-2 transition-all duration-200 text-sm">
                <svg class="<?php echo e(request()->routeIs('juegos.index') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600'); ?> h-5 w-5 transition-colors duration-200 stroke-current" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                    <path d="M21.204,4.803c-.406-1.079-1.446-1.803-2.587-1.803h-.617v-1h-2v1H8v-1h-2v1h-.617c-1.142,0-2.182,.725-2.587,1.803C.475,10.973,0,17.768,0,19.25c0,1.517,1.233,2.75,2.75,2.75,2.571,0,5.379-5.577,6.128-8h6.243c.75,2.423,3.557,8,6.128,8,1.517,0,2.75-1.233,2.75-2.75,0-1.482-.475-8.277-2.796-14.447Zm.046,16.197c-1.882-.063-4.823-5.46-5.359-8h-7.781c-.535,2.539-3.478,7.938-5.359,8-.965,0-1.75-.785-1.75-1.75,0-1.356,.486-8.126,2.731-14.094,.264-.702,.913-1.156,1.652-1.156h13.233c.739,0,1.388,.454,1.652,1.156,2.246,5.968,2.731,12.738,2.731,14.094,0,.965-.785,1.75-1.75,1.75ZM7,7c-1.103,0-2,.897-2,2s.897,2,2,2,2-.897,2-2-.897-2-2-2Zm0,3c-.551,0-1-.449-1-1s.449-1,1-1,1,.449,1,1-.449,1-1,1Zm10-3c-1.103,0-2,.897-2,2s.897,2,2,2,2-.897,2-2-.897-2-2-2Zm0,3c-.551,0-1-.449-1-1s.449-1,1-1,1,.449,1,1-.449,1-1,1Z"/>
                </svg>
                <span class="font-QuicksandMedium">Juegos</span>
            </div>
        </a>

        <a class="w-full flex items-center gap-x-1.5 group select-none" href="/tags">
            <div class="w-1 rounded-xl h-8 bg-transparent transition-colors duration-200 relative overflow-hidden">
                <div class="<?php echo e(request()->routeIs('tags.index') ? 'h-8' : 'translate-y-full h-[102%] group-hover:translate-y-0'); ?> absolute top-0 left-0 w-full bg-blue-600 transition-all duration-300"></div>
            </div>
            <div class="<?php echo e(request()->routeIs('tags.index') ? 'bg-white/10' : 'group-hover:bg-white/10'); ?> dark:group-hover:text-white group w-full group-active:scale-95 self-stretch pl-2 rounded flex items-center space-x-2 transition-all duration-200 text-sm" href="#">
                <svg class="<?php echo e(request()->routeIs('tags.index') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600'); ?> h-5 w-5 transition-colors duration-200 stroke-current group-hover:text-blue-600" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                    <path d="M21.68,9.108L13.204,.723C12.655,.173,11.869-.089,11.098,.013L4.209,.955c-.274,.038-.466,.29-.428,.563,.037,.273,.293,.461,.562,.428l6.889-.942c.46-.066,.934,.095,1.267,.427l8.476,8.385c1.356,1.356,1.363,3.569,.01,4.94l-.19,.199c-.209-.677-.58-1.314-1.114-1.848L11.204,4.723c-.549-.55-1.337-.812-2.106-.709l-6.889,.942c-.228,.031-.404,.213-.43,.44l-.765,6.916c-.083,.759,.179,1.503,.72,2.044l8.417,8.326c.85,.85,1.979,1.318,3.181,1.318h.014c1.208-.004,2.341-.479,3.189-1.339l3.167-3.208c.886-.898,1.317-2.081,1.292-3.257l.708-.743c1.732-1.754,1.724-4.6-.022-6.345Zm-2.688,9.643l-3.167,3.208c-.66,.669-1.542,1.039-2.481,1.042h-.011c-.935,0-1.812-.364-2.476-1.027L2.439,13.646c-.324-.324-.48-.77-.431-1.225l.722-6.528,6.502-.889c.462-.063,.934,.095,1.267,.427l8.476,8.385c1.356,1.356,1.363,3.569,.017,4.934ZM8,10c0,.552-.448,1-1,1s-1-.448-1-1,.448-1,1-1,1,.448,1,1Z"/>
                </svg>
                <span class="font-QuicksandMedium">Tags</span>
            </div>
        </a>

        <a class="w-full flex items-center gap-x-1.5 group select-none" href="/plataformas">
            <div class="w-1 rounded-xl h-8 bg-transparent transition-colors duration-200 relative overflow-hidden">
                <div class="<?php echo e(request()->routeIs('plataformas.index') ? 'h-8' : 'translate-y-full h-[102%] group-hover:translate-y-0'); ?> absolute top-0 left-0 w-full bg-blue-600 transition-all duration-300"></div>
            </div>
            <div class="<?php echo e(request()->routeIs('plataformas.index') ? 'bg-white/10' : 'group-hover:bg-white/10'); ?> dark:group-hover:text-white group w-full group-active:scale-95 self-stretch pl-2 rounded flex items-center space-x-2 transition-all duration-200 text-sm">
                <svg class="<?php echo e(request()->routeIs('plataformas.index') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600'); ?> h-5 w-5 transition-colors duration-200 stroke-current" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512">
                    <path d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z"/>
                    <path d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z"/>
                    <path d="M12,14.773a2.976,2.976,0,0,1-1.531-.425L.485,8.357a1,1,0,0,1,0-1.714L10.469.652a2.973,2.973,0,0,1,3.062,0l9.984,5.991a1,1,0,0,1,0,1.714l-9.984,5.991A2.976,2.976,0,0,1,12,14.773ZM2.944,7.5,11.5,12.633a.974.974,0,0,0,1,0L21.056,7.5,12.5,2.367a.974.974,0,0,0-1,0h0Z"/>
                </svg>
                <span class="font-QuicksandMedium">Plataformas</span>
            </div>
        </a>

        <a class="w-full flex items-center gap-x-1.5 group select-none" href="/idiomas">
            <div class="w-1 rounded-xl h-8 bg-transparent transition-colors duration-200 relative overflow-hidden">
                <div class="<?php echo e(request()->routeIs('idiomas.index') ? 'h-8' : 'translate-y-full h-[102%] group-hover:translate-y-0'); ?> absolute top-0 left-0 w-full bg-blue-600 transition-all duration-300"></div>
            </div>
            <div class="<?php echo e(request()->routeIs('idiomas.index') ? 'bg-white/10' : 'group-hover:bg-white/10'); ?> dark:group-hover:text-white group w-full group-active:scale-95 self-stretch pl-2 rounded flex items-center space-x-2 transition-all duration-200 text-sm">
                <svg class="<?php echo e(request()->routeIs('idiomas.index') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600'); ?> h-5 w-5 transition-colors duration-200 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                </svg>
                <span class="font-QuicksandMedium">Idiomas</span>
            </div>
        </a>

    </div>
</aside><?php /**PATH C:\Users\Xavier\Desktop\DAW2n\M07\laravel\steam\resources\views/components/sidebar-admin.blade.php ENDPATH**/ ?>