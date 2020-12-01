import Home from './components/Home';
import Login from './components/Login';
import Register from './components/Register';
import Dashboard from './components/Dashboard';

export const routes = [
	{
		path:'/'  ,
		component: Home
	},
	{
		path:'/login',
		component: Login
	},
	{
		path:'/register',
		component: Register
	},
	{
		path:'/Dashboard',
		component: Dashboard,
		meta: {
			requiresAuth: true
		}
	}

];