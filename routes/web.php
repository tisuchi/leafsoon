<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/campanhas/ativar/{id}', 'AdminCampanhasController@Ativar')->middleware(['web','\crocodicstudio\crudbooster\middlewares\CBBackend']);

Route::get('/admin/ads_stats/getAdsbyDay/{date}', 'AdminAdsStatsController@getAdsbyDay')->middleware(['web','\crocodicstudio\crudbooster\middlewares\CBBackend']);


Route::group(['before' => 'auth'], function () {
    // Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    // Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\LfmController@upload');
    // list all lfm routes here...
});
Route::post('/admin/wp/{id}', function($id){

	$users = Auth::loginUsingId($id);

			$priv = DB::table("cms_privileges")->where("id",$users->id_cms_privileges)->first();

			$roles = DB::table('cms_privileges_roles')
			->where('id_cms_privileges',$users->id_cms_privileges)
			->join('cms_moduls','cms_moduls.id','=','id_cms_moduls')
			->select('cms_moduls.name','cms_moduls.path','is_visible','is_create','is_read','is_edit','is_delete')
			->get();
			
			$photo = ($users->photo)?asset($users->photo):'https://www.gravatar.com/avatar/'.md5($users->email).'?s=100';
			Session::put('admin_id',$users->id);
			Session::put('admin_is_superadmin',$priv->is_superadmin);
			Session::put('admin_name',$users->name);	
			Session::put('admin_photo',$photo);
			Session::put('admin_privileges_roles',$roles);
			Session::put("admin_privileges",$users->id_cms_privileges);
			Session::put('admin_privileges_name',$priv->name);			
			Session::put('admin_lock',0);
			Session::put('theme_color',$priv->theme_color);
			Session::put("appname",CRUDBooster::getSetting('appname'));		

			CRUDBooster::insertLog(trans("crudbooster.log_login",['email'=>$users->email,'ip'=>Request::server('REMOTE_ADDR')]));		


	return redirect()->route('AdminControllerGetIndex'); 
});