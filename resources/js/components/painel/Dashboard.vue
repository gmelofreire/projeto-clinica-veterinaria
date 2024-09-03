<template>
    <div>
      <TransitionRoot as="template" :show="sidebarOpen">
        <Dialog class="relative z-50 lg:hidden" @close="sidebarOpen = false">
          <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
            <div class="fixed inset-0 bg-gray-900/80" />
          </TransitionChild>
  
          <div class="fixed inset-0 flex">
            <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="-translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="-translate-x-full">
              <DialogPanel class="relative mr-16 flex w-full max-w-xs flex-1">
                <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-300" leave-from="opacity-100" leave-to="opacity-0">
                  <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                    <button type="button" class="-m-2.5 p-2.5" @click="sidebarOpen = false">
                      <span class="sr-only">Close sidebar</span>
                      <XMarkIcon class="h-6 w-6 text-white" aria-hidden="true" />
                    </button>
                  </div>
                </TransitionChild>
                
                <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-primaria px-6 pb-4">
                  <div class="flex h-16 shrink-0 items-center mt-3 justify-around">
                    <img class="h-14 w-auto" src="/public/img/VetMais- Logo-Transparente-icon.png" alt="Your Company" />
                    <img class="h-11 w-auto" src="/public/img/VetMais- Logo-Transparente-texto.png" alt="Your Company" />
                  </div>
                  <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                      <li>
                        <ul role="list" class="-mx-2 space-y-1">
                          <li v-for="item in navigation" :key="item.name">
                            <a :href="item.href" :class="[item.current ? 'bg-primaria-hover text-white' : 'text-white hover:bg-primaria-dark hover:text-white', 'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6']">
                              <component :is="item.icon" :class="[item.current ? 'text-white' : 'text-white group-hover:text-white', 'h-6 w-6 shrink-0']" aria-hidden="true" />
                              {{ item.name }}
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="mt-auto">
                        <a href="#" class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-white hover:bg-primaria-dark hover:text-white">
                          <Cog6ToothIcon class="h-6 w-6 shrink-0 text-white group-hover:text-white" aria-hidden="true" />
                          Configurações
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </DialogPanel>
            </TransitionChild>
          </div>
        </Dialog>
      </TransitionRoot>
  
      <!-- Static sidebar for desktop -->
      <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-primaria px-6 pb-4">
          <div class="flex h-16 shrink-0 items-center mt-3 justify-around">
            <img class="h-14 w-auto" src="/public/img/VetMais- Logo-Transparente-icon.png" alt="Your Company" />
            <img class="h-11 w-auto" src="/public/img/VetMais- Logo-Transparente-texto.png" alt="Your Company" />
          </div>
          <nav class="flex flex-1 flex-col">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
              <li>
                <ul role="list" class="-mx-2 space-y-1">
                  <li v-for="item in navigation" :key="item.name">
                    <a :href="item.href" :class="[item.current ? 'bg-primaria-dark text-white' : 'text-white hover:bg-primaria-dark hover:text-white', 'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6']">
                      <component :is="item.icon" :class="[item.current ? 'text-white' : 'text-white group-hover:text-white', 'h-6 w-6 shrink-0']" aria-hidden="true" />
                      {{ item.name }}
                    </a>
                  </li>
                </ul>
              </li>
              <li class="mt-auto">
                <a href="#" class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-white hover:bg-primaria-dark hover:text-white">
                  <Cog6ToothIcon class="h-6 w-6 shrink-0 text-white group-hover:text-white" aria-hidden="true" />
                  Configurações
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
  
      <div class="lg:pl-72">
        <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
          <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="sidebarOpen = true">
            <span class="sr-only">Open sidebar</span>
            <Bars3Icon class="h-6 w-6" aria-hidden="true" />
          </button>
          <!-- Separator -->
          <div class="h-6 w-px bg-gray-900/10 lg:hidden" aria-hidden="true" />
  
          <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6 justify-end">
            <div class="flex items-center gap-x-4 lg:gap-x-6"> 
              <Menu as="div" class="relative">
                <MenuButton class="-m-1.5 flex items-center p-1.5">
                  <span class="sr-only">Abrir seu menu de usuário</span>
                  <img class="h-8 w-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                  <span class="hidden lg:flex lg:items-center">
                    <span class="ml-4 text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">Tom Cook</span>
                    <ChevronDownIcon class="ml-2 h-5 w-5 text-gray-400" aria-hidden="true" />
                  </span>
                </MenuButton>
                <!-- Menu do usuário, usa dados do userNavigation-->
                <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                  <MenuItems class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none">
                    <MenuItem v-for="item in userNavigation" :key="item.name" v-slot="{ active }">
                      <template v-if="item.name === 'Sair'">
                        <form action="/logout" method="POST">
                          <input type="hidden" name="_token" :value="csrfToken">
                          <button type="submit" :class="[active ? 'bg-gray-50' : '', 'block w-full text-left px-3 py-1 text-sm leading-6 text-gray-900']">
                            {{ item.name }}
                          </button>
                        </form>
                      </template>
                      <template v-else-if="item.name === 'Seu perfil'">
                        <a :href="route('perfil.edit')" :class="[active ? 'bg-gray-50' : '', 'block px-3 py-1 text-sm leading-6 text-gray-900']">
                          {{ item.name }}
                        </a>
                      </template>
                      <template v-else>
                        <a :href="item.href" :class="[active ? 'bg-gray-50' : '', 'block px-3 py-1 text-sm leading-6 text-gray-900']">
                          {{ item.name }}
                        </a>
                      </template>
                    </MenuItem>
                  </MenuItems>
                </transition>
              </Menu>
            </div>
          </div>
        </div>
  
        <main class="py-10">
          <div class="px-4 sm:px-6 lg:px-8">
            <grafico-consulta-ano />
          </div>
        </main>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  import {
    Dialog,
    DialogPanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    TransitionChild,
    TransitionRoot,
  } from '@headlessui/vue'
  import {
    Bars3Icon,
    BellIcon,
    CalendarIcon,
    ChartPieIcon,
    Cog6ToothIcon,
    DocumentDuplicateIcon,
    FolderIcon,
    HomeIcon,
    UserGroupIcon,
    UsersIcon,
    XMarkIcon,
  } from '@heroicons/vue/24/outline'
  
  import { ChevronDownIcon, MagnifyingGlassIcon } from '@heroicons/vue/20/solid'
  
  const navigation = [
    { name: 'Dashboard', href: '#', icon: ChartPieIcon, current: true },
    { name: 'Consultas', href: '#', icon: CalendarIcon, current: false },
    { name: 'Equipe', href: '#', icon: UserGroupIcon, current: false },
    { name: 'Pacientes', href: '#', icon: UsersIcon, current: false },
    { name: 'Portal', href: '#', icon: DocumentDuplicateIcon, current: false },
  ]
  const userNavigation = [
    { name: 'Seu Perfil', href: '/perfil' },
    { name: 'Sair', href: '/logout' },
  ]

  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  
  const sidebarOpen = ref(false)
  </script>