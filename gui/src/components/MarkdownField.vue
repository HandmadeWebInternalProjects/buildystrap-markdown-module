<script setup>
import { toRefs, computed, onMounted, ref } from "vue";

import { VMarkdownEditor, VMarkdownView } from "vue3-markdown";
import "vue3-markdown/dist/style.css";

const props = defineProps({
  ...window.Buildy.$propTypes.moduleProps.commonProps,
});

const { handle, config, modelValue, uuid } = toRefs(props);

onMounted(() => {
  console.log(uuid.value);
});

const mode = ref("light");

const emit = defineEmits(["update:modelValue", "updateMeta"]);
const { update } = window.Buildy.$composables.useFieldType(emit);

const value = computed({
  get() {
    return modelValue?.value || "";
  },
  set(newVal) {
    update(newVal);
  },
});
</script>

<template>
  <div>
    <label class="w-100">
      <text-field handle="test" :config="{ label: 'test' }" />
      <radio-field
        handle="test"
        :config="{ label: 'test', options: ['1', '2'] }"
      />
      <VMarkdownEditor
        v-model="value"
        class="form-control"
        :placeholder="config.placeholder"
      ></VMarkdownEditor>
    </label>

    <VMarkdownView :mode="mode" :content="value"></VMarkdownView>
  </div>
</template>
