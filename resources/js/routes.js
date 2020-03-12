import VueRouter from 'vue-router'

let routes = [
    {
        path: '/',
        name: 'index',
        components: require('./components/Index')
    }
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router
