<template>
  <div class="bg-white border-spacing-1 ">
    <div class="w-full mt-14 ">
      <div class="divide-y divide-gray-900/10">
        <h2 class="text-2xl  font-bold leading-10 tracking-tight text-gray-900">Perguntas frequentes</h2>
        <dl class="mt-10 space-y-6 divide-y divide-gray-900/10 ">
          <Disclosure as="div" v-for="faq in faqs" :key="faq.question" class=" pt-6" v-slot="{ open }">
            <dt>
              <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-900">
                <span class="text-base font-semibold leading-7">{{ faq.question }}</span>
                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon v-if="!open" class="h-6 w-6" aria-hidden="true" />
                  <ChevronUpIcon v-else class="h-6 w-6" aria-hidden="true" />
                </span>
              </DisclosureButton>
            </dt>
            <DisclosurePanel as="dd" class="mt-2 pr-12">
              <p class="text-base leading-7 text-gray-600" v-html="faq.answer"></p>
            </DisclosurePanel>
          </Disclosure>
        </dl>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronDownIcon, ChevronUpIcon } from '@heroicons/vue/24/outline'

const faqs = [
  {
    question: "Como faço para poder marcar uma consulta?",
    answer: "Existem duas formas de marcar consultas<br>&emsp;1. Pelo nosso whatsapp (61) 99847-7809<br>&emsp;2. Pela área do paciente em nosso site",
  },
  {
    question: "Vocês vendem alimentos e medicamentos para pets?",
    answer: "Sim, vendemos alimentos e medicamentos para pets, mas apenas presencialmente em nossa clínica.",
  },
  {
    question: "Meu pet está apresentando comportamento estranho, o que devo fazer?",
    answer: "Se o seu pet está apresentando comportamento estranho, recomendamos que você marque uma consulta com um de nossos veterinários o mais rápido possível para uma avaliação detalhada. Caso seja uma emergência, leve-o com urgência para a clínica, pois temos pronto atendimento.",
  },
]
</script>
