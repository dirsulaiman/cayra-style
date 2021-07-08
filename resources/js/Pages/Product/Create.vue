<template>
    {{this.form}}
    <div class="flex w-full">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mx-auto" @submit.prevent="submit">
            <p class="text-lg text-center mx-auto p-3 text-gray-800">Create Product</p>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">
                    Nama Barang
                </label>
                <input
                    class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Nama barang" v-model="form.name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">
                    Harga
                </label>
                <input
                    class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline"
                    id="price" type="number" placeholder="Harga" v-model="form.price">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">
                    Deskripsi
                </label>
                <input
                    class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" type="text" placeholder="Deskripsi Singkat" v-model="form.description">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">
                    Gambar Barang
                </label>
                <input
                    class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline"
                    id="image" type="file" >
            </div>
            <div class="mb-4" id="link">
                <label class="block text-gray-700 text-sm mb-2">
                    Link
                </label>
                <div class="grid space-y-2 md:grid-cols-4 mb-3 md:space-x-3 border border-gray-200 rounded p-2 md:p-0 md:border-none md:space-y-0"
                v-for="(link, index) of form.links">
                    <input class="shadow appearance-none border border-gray-200 rounded py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline" type="text" v-model="form.links[index].label" placeholder="Label">

                    <input class="shadow appearance-none border border-gray-200 rounded py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline" type="text" v-model="form.links[index].link" placeholder="Link">

                    <input class="shadow appearance-none border border-gray-200 rounded py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline" type="text" v-model="form.links[index].link_alt" placeholder="Link Alternatif (opsional)">
                    
                    <span>
                        <select class="appearance-none bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" v-model="form.links[index].color" id="color">
                            <option value="00FF00">Hijau</option>
                            <option value="0000FF">Biru</option>
                            <option value="00FFFF">Kuning</option>
                        </select>
                        <a class="rounded-full border-none text-sm text-white p-2 text-center bg-red-600 cursor-pointer"
                v-on:click="deleteItem" @click="deleteItem(link)">X</a>
                    </span>
                </div>
                    
            </div>

            <div class="mt-3 mb-3">
                <a class="rounded border-none text-sm text-white p-2 text-center bg-green-300 cursor-pointer"
                v-on:click="addItem">Tambah Link</a>
            </div>
            
            <div class="items-center">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Simpan
                </button>
            </div>
        </form>
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
                    detail: '',
                    images: [],
                    links: [
                        {
                            label: null,
                            link: null,
                            link_alt: null,
                            color: null,
                        }
                    ],
                })
            }
        },
        methods: {
            submit() { 
                let data = new FormData();
                data.append('name', this.form.name);
                data.append('price', this.form.price);
                data.append('description', this.form.description);
                // data.append('detail', this.form.detail);

                let image = document.querySelector("#image").files[0];
                if (image) {
                    data.append('images', image);
                }

                axios.post(this.route('product.store'), data)
                    .then((response) => {
                        this.form.reset();
                    })
                    .catch(
                        console.log("error")
                    );
                console.log('form selesai')
            },

            addItem() {
                new_link = {
                    label: null,
                    link: null,
                    link_alt: null,
                    color: null,
                }
                this.form.links.push(new_link);
                // console.log(this.form.links);
            },

            deleteItem (link) {
                const filterList = this.form.links.filter(element => element !== link);
                this.form.links = filterList;
            }
        },
    }
</script>