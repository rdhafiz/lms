const apiVersion = '/front/api/';

const apiRoutes = {

    /*
    |---- * ---- * ---- * ---- * ---- * ---- * ---- * ----|
    |---- AUTHENTICATION API ROUTE INTEGRATION -----------|
    |---- * ---- * ---- * ---- * ---- * ---- * ---- * ----|
    */

    login: apiVersion + 'auth/login',
    registration: apiVersion + 'auth/register',
    forget: apiVersion + 'auth/forget',
    reset: apiVersion + 'auth/reset',

}

export default apiRoutes;
