<template>
<BreezeIndex>
     <div class="contain py-16 font-poppins">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">Login</h2>
            <p class="text-gray-600 mb-6 text-sm">welcome back customer</p>
            <form action="#" method="post" autocomplete="off">
                <div class="space-y-2">
                    <div>
                        <label for="email" class="text-gray-600 mb-2 block">Email address</label>
                        <input type="email" name="email" id="email" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="youremail.@domain.com" />
                    </div>
                    <div>
                        <label for="password" class="text-gray-600 mb-2 block">Password</label>
                        <input type="password" name="password" id="password" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="*******" />
                    </div>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="text-primary focus:ring-0 rounded-sm cursor-pointer" />
                        <label for="remember" class="text-gray-600 ml-3 cursor-pointer">Remember me</label>
                    </div>
                    <a href="#" class="text-primary">Forgot password</a>
                </div>
                <div class="mt-4">
                    <button type="submit" class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">Login</button>
                </div>
            </form>
            <p class="mt-4 text-center text-gray-600">Don't have account? <a href="register.html" class="text-primary">Register now</a></p>
        </div>
    </div>
</BreezeIndex>
</template>

<script>
import BreezeIndex from '@/Layouts/Home/Index.vue'
export default {
    components: {
        BreezeIndex
    },

    // data() {
    //     return {
    //         user_count: this.$page.props.user_count,
    //         category_count: this.$page.props.category_count,
    //         product_count: this.$page.props.product_count,
    //         order_count: this.$page.props.order_count,
    //         purchase_count: this.$page.props.purchase_count,
    //     };
    // },

    methods: {

    },
};
</script>
