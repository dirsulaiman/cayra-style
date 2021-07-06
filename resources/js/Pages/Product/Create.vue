<template>
    {{this.form}}
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">
                    Nama Barang
                </label>
                <input
                    class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Nama barang">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">
                    Harga
                </label>
                <input
                    class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Nama barang">
            </div>
            
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2020 Acme Corp. All rights reserved.
        </p>
    </div>

    <div class="flex h-full w-full">

        <div class="rounded-lg shadow-lg mx-auto mt-10 p-5 w-50">
            <form @submit.prevent="submit">
                <p class="text-lg text-center mx-auto p-3">Create Product</p>
                <div class="grid grid-cols-4 gap-x-5 gap-y-2">
                    <label class="text-left text-base" for="name">Nama</label>
                    <input class="rounded-lg border-gray-200 col-span-3" type="text" name="name" v-model="form.name"
                        required>

                    <label class="text-left text-base " for="price">Harga</label>
                    <input class="rounded-lg border-gray-200 col-span-3" type="number" name="price" v-model="form.price"
                        required>

                    <label class="text-left text-base" for="description">Deskripsi</label>
                    <input class="rounded-lg border-gray-200 col-span-3" type="text" name="description"
                        v-model="form.description" required>

                    <label class="text-left text-base" for="detail">Detail</label>
                    <input class="rounded-lg border-gray-200 col-span-3" type="text" v-model="form.detail">

                    <label class="text-left text-base" for="image">Image</label>
                    <input class="rounded-lg border-gray-200 col-span-3" type="file" id="img">

                    <a class="col-start-4 rounded-full border-black text-sm p-1 text-center bg-gray-200"
                        v-on:click="addItem">Link</a>

                    <div class="col-span-4">
                        <label class="rounded-xl bg-gray-100 text-sm text-center p-2 mx-4" for="image">Label</label>
                        <input class="rounded-lg border-gray-200" type="text">
                        <label class="rounded-xl bg-gray-100 text-sm text-center p-2 mx-4" for="image">Link</label>
                        <input class="rounded-lg border-gray-200" type="text">
                    </div>

                    <button type="submit"
                        class="col-start-4 rounded-full bg-green-300 p-2 text-sm text-white">Simpan</button>
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
                // this.form
                //     .transform(data => ({
                //         ... data,
                //     }))
                //     .post(this.route('product.store'), {
                //         onFinish: () => this.form.reset(),
                //     })

                let data = new FormData();
                data.append('name', this.form.name);
                data.append('price', this.form.price);
                data.append('description', this.form.description);
                data.append('detail', this.form.detail);

                let image = document.querySelector("#img").files[0];
                if (image) {
                    data.append('images', image);
                }

                axios.post(this.route('product.store'), data)
                    .then((response) => {
                        // this.form.reset();
                    })
                    .catch(
                        console.log(error)
                    );
                console.log('form selesai')
            },

            addItem() {
                console.log("test");
            }
        },
    }
</script>