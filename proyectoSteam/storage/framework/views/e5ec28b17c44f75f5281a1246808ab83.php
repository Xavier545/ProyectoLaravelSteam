
<?php $__env->startSection('gestion'); ?>
    <div class="p-6 w-full flex flex-col gap-7">

        <form action="/user" class="flex flex-col relative h-12 w-full min-w-[200px] gap-3" method="POST">
            <?php echo csrf_field(); ?>
            <div class="flex relative gap-2">
                <div>
                    <input class="peer h-full w-60 rounded-md border border-gray-500 bg-transparent px-3 py-3 font-sans text-sm font-normal
                    text-blue-gray-700 outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200
                    placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-800 focus:border-t-transparent focus:outline-0
                    disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="name">
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-60 select-none
                    text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1
                    before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l
                    before:border-gray-500 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border
                    after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200
                    after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500
                    peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px]
                    peer-focus:leading-tight peer-focus:text-blue-800 peer-focus:before:border-t-2 peer-focus:before:border-l-2
                    peer-focus:before:!border-blue-800 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-blue-800
                    peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Nombre
                    </label>
                </div>

                <div>
                    <input class="peer h-full w-60 rounded-md border border-gray-500 bg-transparent px-3 py-3 font-sans text-sm font-normal
                    text-blue-gray-700 outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200
                    placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-800 focus:border-t-transparent focus:outline-0
                    disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="email">
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-62 -top-1.5 flex h-full w-60 select-none
                    text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1
                    before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l
                    before:border-gray-500 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border
                    after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200
                    after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500
                    peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px]
                    peer-focus:leading-tight peer-focus:text-blue-800 peer-focus:before:border-t-2 peer-focus:before:border-l-2
                    peer-focus:before:!border-blue-800 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-blue-800
                    peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Correo
                    </label>
                </div>

                <div>
                    <input class="peer h-full w-60 rounded-md border border-gray-500 bg-transparent px-3 py-3 font-sans text-sm font-normal
                    text-blue-gray-700 outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200
                    placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-800 focus:border-t-transparent focus:outline-0
                    disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="password">
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-124 -top-1.5 flex h-full w-60 select-none
                    text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1
                    before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l
                    before:border-gray-500 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border
                    after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200
                    after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500
                    peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px]
                    peer-focus:leading-tight peer-focus:text-blue-800 peer-focus:before:border-t-2 peer-focus:before:border-l-2
                    peer-focus:before:!border-blue-800 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-blue-800
                    peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Contraseña
                    </label>
                </div>

                <div>
                    <input class="peer h-full w-60 rounded-md border border-gray-500 bg-transparent px-3 py-3 font-sans text-sm font-normal
                    text-blue-gray-700 outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200
                    placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-800 focus:border-t-transparent focus:outline-0
                    disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="password_confirmation">
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-186 -top-1.5 flex h-full w-60 select-none
                    text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1
                    before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l
                    before:border-gray-500 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border
                    after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200
                    after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500
                    peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px]
                    peer-focus:leading-tight peer-focus:text-blue-800 peer-focus:before:border-t-2 peer-focus:before:border-l-2
                    peer-focus:before:!border-blue-800 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-blue-800
                    peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Reescribre Contraseña
                    </label>
                </div>

                <div class="flex justify-center items-center text-gray-400 px-1">
                    <input type="checkbox" class="w-5 h-5 border border-gray-500 bg-transparent rounded-md text-blue-600 focus:ring-0"
                    name="admin">
                    <label for="admin" class="px-1">Administrador</label>
                </div>

                <input type="submit" value="Subir" class="h-10 w-20 bg-blue-600 text-white rounded
                transition-all duration-100 hover:bg-blue-700 hover:scale-95 active:scale-90 cursor-pointer">
                
            </div>
        </form>

        <?php if($errors->any()): ?>
            <div class="text-red-500">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span><?php echo e($error); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <table class="w-full border-2 border-gray-800">
            <thead>
                <tr class="bg-[#2f3238] text-left text-white border-b border-gray-700">
                    <th class="p-2">ID</th>
                    <th class="p-2">Nombre</th>
                    <th class="p-2">Correo</th>
                    <th class="p-2">Idioma</th>
                    <th class="p-2">Juegos</th>
                    <th class="p-2">Rol</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </thead>
            <tbody class="">
                <?php $__currentLoopData = $todosLosUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="bg-white/3 text-white border-b border-gray-700">

                        <td class="p-2"><?php echo e($user->id); ?></td>
                        <td class="p-2"><?php echo e($user->name); ?></td>
                        <td class="p-2"><?php echo e($user->email); ?></td>

                        <td class="p-2">
                            <?php if($user->idioma == null): ?>
                                <div class="px-2 py-1 bg-zinc-900 text-white rounded inline-block mb-1.5">No Asignado</div>
                            <?php else: ?>
                                <div class="px-2 py-1 bg-green-900 text-white rounded inline-block mb-1.5"><?php echo e($user->idioma->nombre); ?></div>
                            <?php endif; ?>
                        </td>

                        <td class="p-2">
                            <?php $__currentLoopData = $user->juegos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-2 py-1 bg-fuchsia-800 text-white rounded inline-block mb-1.5"><?php echo e($juego->nombre); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>

                        <td class="p-2">
                            <?php if($user->isAdmin == false): ?>
                                <div class="px-2 py-1 bg-indigo-900 text-white rounded inline-block mb-1.5">Cliente</div>                                        
                            <?php elseif($user->isAdmin == true): ?>
                                <div class="px-2 py-1 bg-amber-700 text-white rounded inline-block mb-1.5">Admin</div>
                            <?php endif; ?>
                        </td>
                        
                        <td class="p-2">
                            <div class="flex gap-2 items-center h-full">
                                <?php if(Auth::user()->id != $user->id): ?>
                                    <form action="/user/<?php echo e($user->id); ?>" method="POST" class="relative">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <input type="submit" value="Borrar" class="h-8 w-20 bg-red-800 text-white rounded
                                        transition-all duration-100 hover:bg-red-900 hover:scale-95 active:scale-90 cursor-pointer">
                                    </form>
                                    <form action="/user/<?php echo e($user->id); ?>" method="GET" class="relative">
                                        <?php echo csrf_field(); ?>
                                        <input type="submit" value="Editar" class="h-8 w-20 bg-yellow-600 text-white rounded
                                        transition-all duration-100 hover:bg-yellow-800 hover:scale-95 active:scale-90 cursor-pointer">
                                    </form>
                                <?php endif; ?>
                            </div>
                        </td>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Xavier\Desktop\DAW2n\M07\laravel\steam\resources\views/gestionUsuarios.blade.php ENDPATH**/ ?>