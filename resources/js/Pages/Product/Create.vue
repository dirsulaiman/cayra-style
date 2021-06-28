<template>
    <div class="flex h-full w-full">
        <div class="rounded-lg shadow-lg mx-auto mt-10 p-5">
            <form @submit.prevent="submit">
                input
                <div>
                    <div class="flex-col m-3">
                        <label class="mx-2 " for="name">Nama</label>
                        <input class="rounded-lg border-gray-200" type="text" name="name" v-model="form.name" required>
                    </div>
                    <div class="flex-col m-3">
                        <label class="mx-2 " for="price">Harga</label>
                        <input class="rounded-lg border-gray-200" type="number" name="price" v-model="form.price" required>
                    </div>
                    <div class="flex-col m-3">
                        <label class="mx-2 " for="description">Deskripsi</label>
                        <input class="rounded-lg border-gray-200" type="text" name="description" v-model="form.description" required>
                    </div>
                    <div class="flex-col m-3">
                        <button type="submit" class="rounded-full bg-green-300 p-2 text-sm text-white">Simpan</button>
                        <a class="rounded-full border-black text-sm" v-on:click="addItem">Link</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        props: {},
        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    price: '',
                    description: '',
                    detail: [],
                    images: [],
                    links: [],
                })
            }
        },
        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                    }))
                    .post(this.route('product.store'), {
                        onFinish: () => this.form.reset('name', 'price', 'description', 'detail', 'images', 'links',),
                    })
            },
            addItem () {
                console.log("test");
            }
        },
    }
</script>