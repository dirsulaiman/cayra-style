<template>
    <div class="flex h-full w-full">
        <div class="rounded-lg shadow-lg mx-auto mt-10 p-5 w-50">
            <form @submit.prevent="submit">
                <p class="text-lg text-center mx-auto p-3">Create Product</p>
                <div class="grid grid-cols-4 gap-x-5 gap-y-2">
                        <label class="text-left text-base" for="name">Nama</label>
                        <input class="rounded-lg border-gray-200 col-span-3" type="text" name="name" v-model="form.name" required>
                        
                        <label class="text-left text-base " for="price">Harga</label>
                        <input class="rounded-lg border-gray-200 col-span-3" type="number" name="price" v-model="form.price" required>
                        
                        <label class="text-left text-base" for="description">Deskripsi</label>
                        <input class="rounded-lg border-gray-200 col-span-3" type="text" name="description" v-model="form.description" required>
                        
                        <label class="text-left text-base" for="detail">Detail</label>
                        <input class="rounded-lg border-gray-200 col-span-3" type="text" v-model="form.detail">

                        <label class="text-left text-base" for="image">Image</label>
                        <input class="rounded-lg border-gray-200 col-span-3"  type="file" v-model="">

                        <a class="col-start-4 rounded-full border-black text-sm p-1 text-center bg-gray-200" v-on:click="addItem">Link</a>

                        <div class="col-span-4">
                            <label class="rounded-xl bg-gray-100 text-sm text-center p-2 mx-4" for="image">Label</label>
                            <input class="rounded-lg border-gray-200" type="text" v-model="form.detail">
                            <label class="rounded-xl bg-gray-100 text-sm text-center p-2 mx-4" for="image">Link</label>
                            <input class="rounded-lg border-gray-200" type="text" v-model="form.detail">
                        </div>

                        <button type="submit" class="col-start-4 rounded-full bg-green-300 p-2 text-sm text-white">Simpan</button>
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