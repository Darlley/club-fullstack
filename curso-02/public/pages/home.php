<?=get('message'); ?>
<div>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex w-full justify-between mb-8">
            <h2 class="text-xl font-bold">Página Inicial</h2>
        </div>
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Usuários</h1>
                <p class="mt-2 text-sm text-gray-700">Veja a lista de usuarios, crie e edite.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="/?page=create-user" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Adicionar</a>
            </div>
        </div>
        <div class="-mx-4 mt-8 sm:-mx-0">
            <table class="min-w-full divide-y divide-gray-300">
                <thead>
                    <tr>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">N°</th>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
                        <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Title</th>
                        <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Email</th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <?php  
                        $users = all('users');
                        foreach($users as $user): 
                    ?>
                    <tr>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?=$user->id; ?></td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0"><?=$user->firstname; ?></td>
                        <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:table-cell"><?=$user->middlename; ?></td>
                        <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell"><?=$user->email; ?></td>
                        <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0 flex gap-4">
                            <a href="/?page=edit-user&id=<?=$user->id; ?>" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                            <a href="/?page=delete-user&id=<?=$user->id; ?>" class="text-rose-600 hover:text-indigo-900">Deletar</a>
                        </td>
                    </tr>
                    <?php 
                        endforeach; 
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>