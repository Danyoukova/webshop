import axios from "axios";

const apiClient = axios.create({
    baseURL: 'http://localhost:8000',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
    }
})



export default {


    getRegister(){
        return apiClient.post('/api/register')
    },
    getUserWithAddress(id){
        return apiClient.get('/api/userWithAddress' + id)
    },
    getProducts() {
        // console.log('getting all products')
        return apiClient.get('/api/products')
    },
    getProduct(id) {
        // console.log('getting a product')
        return apiClient.get('/api/products/' + id)
    },

    getCategories() {

        return apiClient.get('/api/categories')
    },

    getSubcategories() {

        return apiClient.get('/api/subcategories')
    }

}
