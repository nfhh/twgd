<template>
    <div class="vd">
        <sidebar :curProduct="curProductName" :installTip="listenInstallTip" :contentLen="steps.length"></sidebar>
        <article>
            <div class="one">
                <div class="left">
                    <div class="left" v-if="steps.length">
                        <a href="#" @click.prevent="goToStep(index - 1)">
                            <img src="/images/left.png" width="20" height="20">
                        </a>
                        <a href="#" @click.prevent="goToStep(index + 1)">
                            <img src="/images/right.png" width="20" height="20">
                        </a>
                    </div>
                </div>
                <div class="right">
                    <select v-model="selected_lan" v-if="steps.length === 0">
                        <option v-for="item of lans" :key="item.id" :value="item.value">{{ item.title }}</option>
                    </select>
                </div>
            </div>
            <div class="two">
                <template v-if="steps.length === 0">
                    <div class="top">
                        <div class="inside1">
                            <h1>{{ listenInstallTip }}</h1>
                        </div>
                        <div class="inside2 mt-3">
                            <label for="types"> {{ listenChooseTypeTip }}</label>
                            <select id="types" v-model="selected_type_id">
                                <option v-for="(v,k) of types" :key="k" :value="v">
                                    {{ v }}
                                </option>
                            </select>
                        </div>
                        <div class="inside2 mt-3">
                            <label for="sizes"> {{ listenChooseSizeTip }}</label>
                            <select id="sizes" v-model="selected_size_id">
                                <option v-for="(v,k) of sizes" :key="k" :value="v">
                                    {{ v }}
                                </option>
                            </select>
                        </div>
                        <div class="inside2 mt-3">
                            <label for="products"> {{ listenChooseProductTip }}</label>
                            <select id="products" v-model="initSelectedProduct">
                                <option v-for="item of listenProducts"
                                        :key="item.id"
                                        :value="item">
                                    {{ item.name }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="bottom mt-6">
                        <button type="button" class="pointer" @click="handleClick">
                            {{ listenStart }}
                        </button>
                    </div>
                </template>
                <template v-else>
                    <div v-html="cur_step" class="content"></div>
                </template>
            </div>
        </article>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                lang: {
                    cn: {
                        install_tip: "快速安装指南",
                        choose_type_tip: "产品类型",
                        choose_size_tip: "尺寸",
                        choose_product_tip: "产品ID/型号",
                        start: "开始"
                    },
                    de: {
                        install_tip: "Kurzanleitung zur Installation",
                        choose_type_tip: "Produkttyp",
                        choose_size_tip: "Größe",
                        choose_product_tip: "Produkt-ID / Modell",
                        start: "beginnen"
                    },
                    en: {
                        install_tip: "Quick Installation Guide",
                        choose_type_tip: "product type",
                        choose_size_tip: "size",
                        choose_product_tip: "Product ID / Model",
                        start: "Start"
                    },
                    es: {
                        install_tip: "Guía de instalación rápida",
                        choose_type_tip: "Tipo de producto",
                        choose_size_tip: "Tamaño",
                        choose_product_tip: "ID del producto / modelo",
                        start: "empezar"
                    },
                    fr: {
                        install_tip: "Guide d'installation rapide",
                        choose_type_tip: "Type de produit",
                        choose_size_tip: "La taille",
                        choose_product_tip: "ID / modèle du produit",
                        start: "commencer"
                    },
                    hu: {
                        install_tip: "Gyors telepítési útmutató",
                        choose_type_tip: "Termék típusa",
                        choose_size_tip: "méret",
                        choose_product_tip: "Termék azonosító / modell",
                        start: "Start"
                    },
                    it: {
                        install_tip: "Guida rapida all'installazione",
                        choose_type_tip: "Tipo di prodotto",
                        choose_size_tip: "dimensione",
                        choose_product_tip: "ID prodotto / modello",
                        start: "iniziare"
                    },
                    ja: {
                        install_tip: "クイックインストールガイド",
                        choose_type_tip: "製品の種類",
                        choose_size_tip: "大きさ",
                        choose_product_tip: "製品ID /モデル",
                        start: "始めます"
                    },
                    ko: {
                        install_tip: "빠른 설치 가이드",
                        choose_type_tip: "제품 유형",
                        choose_size_tip: "사이즈",
                        choose_product_tip: "제품 ID / 모델",
                        start: "지금 시작"
                    },
                    ru: {
                        install_tip: "Hızlı Kurulum Kılavuzu",
                        choose_type_tip: "Тип продукта",
                        choose_size_tip: "размер",
                        choose_product_tip: "ID продукта / Модель",
                        start: "Başlayın"
                    },
                    tw: {
                        install_tip: "快速安裝指南",
                        choose_type_tip: "產品類型",
                        choose_size_tip: "尺寸",
                        choose_product_tip: "產品ID/型號",
                        start: "開始"
                    }
                },
                lans: [
                    {id: 1, value: 'en', title: 'English/Global'},
                    {id: 2, value: 'de', title: 'Deutsch/Deutschland'},
                    {id: 3, value: 'fr', title: 'France/Français'},
                    {id: 4, value: 'it', title: 'Italiano/Italia'},
                    {id: 5, value: 'es', title: 'Español/España'},
                    {id: 6, value: 'hu', title: 'Magyar/Magyarország'},
                    {id: 7, value: 'ru', title: 'Türkçe/Türkiye'},
                    {id: 8, value: 'ko', title: '한국어/한국'},
                    {id: 9, value: 'ja', title: '日本語/日本'},
                    {id: 10, value: 'cn', title: '简体中文/中国'},
                    {id: 11, value: 'tw', title: '繁體中文/中国'}
                ],
                types: [],
                sizes: [],
                selected_lan: 'cn',
                products: [],
                selected_type_id: 'TNAS',
                selected_size_id: '2-BAY',
                disabled: true,
                index: 0,
                steps: [],
                cur_step: null,
                selected_product: {}
            }
        },
        mounted() {
            axios.get('/api/products').then(response => {
                this.products = response.data.data
                this.types = [...new Set(this.products.map(item => item.type))]
                this.sizes = [...new Set(this.products.map(item => item.size))]
            })
        },
        computed: {
            curProductName() {
                if (Object.keys(this.selected_product).length) {
                    return this.selected_product.name
                }
                if (!(typeof this.listenProducts[0] === 'undefined')) {
                    return this.listenProducts[0].name
                }
            },
            curProductId() {
                if (Object.keys(this.selected_product).length) {
                    return this.selected_product.id
                }
                if (!(typeof this.listenProducts[0] === 'undefined')) {
                    return this.listenProducts[0].id
                }
            },
            initSelectedProduct: {
                get() {
                    if (Object.keys(this.selected_product).length) {
                        return this.selected_product
                    }
                    return this.listenProducts[0]
                },
                set(value) {
                    this.selected_product = value
                }
            },
            listenProducts() {
                this.initSelectedProduct = this.selected_product = {}
                return this.products.filter((item) => {
                    return item['type'] === this.selected_type_id && item['size'] === this.selected_size_id
                })
            },
            listenChooseTypeTip() {
                return this.lang[this.selected_lan]['choose_type_tip']
            },
            listenChooseSizeTip() {
                return this.lang[this.selected_lan]['choose_size_tip']
            },
            listenChooseProductTip() {
                return this.lang[this.selected_lan]['choose_product_tip']
            },
            listenInstallTip() {
                return this.lang[this.selected_lan]['install_tip']
            },
            listenStart() {
                return this.lang[this.selected_lan]['start']
            }
        },
        methods: {
            handleClick() {
                axios.get(`/api/steps/${this.curProductId}/${this.selected_lan}`).then(response => {
                    this.steps = response.data.data
                    this.cur_step = this.steps[this.index]
                })
            },
            goToStep(step) {
                if (step < 0 || step > this.steps.length - 1) {
                    return false
                }
                this.index = step;
                this.cur_step = this.steps[this.index]
            },
            _getNameById(arr, id) {
                for (let value of arr) {
                    if (value.id == id) {
                        return value.name
                    }
                }
            }
        }
    }
</script>
