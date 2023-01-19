<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Source_Documents extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'source_documents';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'name','numbering','document_type','have_comment','auto_print','display_title','declaration','is_active','user_id','company_id','for_inventory'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				name LIKE ?  OR 
				display_title LIKE ?  OR 
				declaration LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id",
			"name",
			"numbering",
			"document_type",
			"have_comment",
			"auto_print",
			"display_title",
			"declaration",
			"is_active",
			"user_id",
			"company_id",
			"for_inventory" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id",
			"name",
			"numbering",
			"document_type",
			"have_comment",
			"auto_print",
			"display_title",
			"declaration",
			"is_active",
			"user_id",
			"company_id",
			"for_inventory" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"name",
			"numbering",
			"document_type",
			"have_comment",
			"auto_print",
			"display_title",
			"declaration",
			"is_active",
			"user_id",
			"company_id",
			"for_inventory" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"name",
			"numbering",
			"document_type",
			"have_comment",
			"auto_print",
			"display_title",
			"declaration",
			"is_active",
			"user_id",
			"company_id",
			"for_inventory" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id",
			"name",
			"numbering",
			"document_type",
			"have_comment",
			"auto_print",
			"display_title",
			"declaration",
			"is_active",
			"user_id",
			"company_id",
			"for_inventory" 
		];
	}
}
