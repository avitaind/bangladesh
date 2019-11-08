<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Ability[] $abilities
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereIs($role)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereIsAll($role)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App{
/**
 * App\Country
 *
 * @property int $id
 * @property string $code
 * @property string $name_en
 * @property string $name_tc
 * @property string $name_sc
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereNameEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereNameSc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereNameTc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App{
/**
 * App\Faq
 *
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\FaqTranslation[] $translations
 * @method static \Illuminate\Database\Query\Builder|\App\Faq listsTranslations($translationField)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq orWhereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq orWhereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq translated()
 * @method static \Illuminate\Database\Query\Builder|\App\Faq translatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq whereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq whereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Faq withTranslation()
 */
	class Faq extends \Eloquent {}
}

namespace App{
/**
 * App\FaqTranslation
 *
 * @property int $id
 * @property int $faq_id
 * @property string $locale
 * @property string $question
 * @property string $answer
 * @method static \Illuminate\Database\Query\Builder|\App\FaqTranslation whereAnswer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FaqTranslation whereFaqId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FaqTranslation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FaqTranslation whereLocale($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FaqTranslation whereQuestion($value)
 */
	class FaqTranslation extends \Eloquent {}
}

namespace App{
/**
 * App\News
 *
 * @property int $id
 * @property string $slug
 * @property string $country
 * @property string $thumbnail_path
 * @property string $image_path
 * @property string $status
 * @property bool $is_publish
 * @property bool $is_feature
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\NewsTranslation[] $translations
 * @method static \Illuminate\Database\Query\Builder|\App\News featured($is_feature = true)
 * @method static \Illuminate\Database\Query\Builder|\App\News listsTranslations($translationField)
 * @method static \Illuminate\Database\Query\Builder|\App\News notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\News orWhereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\News orWhereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\News published($is_publish = true)
 * @method static \Illuminate\Database\Query\Builder|\App\News translated()
 * @method static \Illuminate\Database\Query\Builder|\App\News translatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereEndDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereImagePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereIsFeature($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereIsPublish($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereStartDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereThumbnailPath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\News whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\News withTranslation()
 */
	class News extends \Eloquent {}
}

namespace App{
/**
 * App\NewsTranslation
 *
 * @property int $id
 * @property int $news_id
 * @property string $locale
 * @property string $title
 * @property string $content
 * @property string $introduction
 * @method static \Illuminate\Database\Query\Builder|\App\NewsTranslation whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\NewsTranslation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\NewsTranslation whereIntroduction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\NewsTranslation whereLocale($value)
 * @method static \Illuminate\Database\Query\Builder|\App\NewsTranslation whereNewsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\NewsTranslation whereTitle($value)
 */
	class NewsTranslation extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property int $id
 * @property string $country
 * @property string $short_code
 * @property string $name_en
 * @property string $name_tc
 * @property string $name_sc
 * @property string $spec_view
 * @property string $feature_view
 * @property int $warranty_term_id
 * @property int $product_type_id
 * @property int $extra_warranty
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Faq[] $faqs
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductModel[] $productModels
 * @property-read \App\ProductType $productType
 * @property-read \App\WarrantyTerm $warrantyTerm
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereExtraWarranty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereFeatureView($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereNameEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereNameSc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereNameTc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProductTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereShortCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereSpecView($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereWarrantyTermId($value)
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\ProductModel
 *
 * @property int $id
 * @property string $model_number
 * @property string $name_en
 * @property string $name_tc
 * @property string $name_sc
 * @property int $product_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Product $product
 * @property-read \App\ProductType $productType
 * @method static \Illuminate\Database\Query\Builder|\App\ProductModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductModel whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductModel whereModelNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductModel whereNameEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductModel whereNameSc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductModel whereNameTc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductModel whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductModel whereUpdatedAt($value)
 */
	class ProductModel extends \Eloquent {}
}

namespace App{
/**
 * App\ProductRegistration
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_model_id
 * @property string $serial_num
 * @property string $purchase_from
 * @property \Carbon\Carbon $purchase_date
 * @property \Carbon\Carbon $warranty_expire_date
 * @property int $basic_month
 * @property int $extra_month
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $owner
 * @property-read \App\ProductModel $productModel
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration whereBasicMonth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration whereExtraMonth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration whereProductModelId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration wherePurchaseDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration wherePurchaseFrom($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration whereSerialNum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductRegistration whereWarrantyExpireDate($value)
 */
	class ProductRegistration extends \Eloquent {}
}

namespace App{
/**
 * App\ProductType
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_tc
 * @property string $name_sc
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductModel[] $productType
 * @method static \Illuminate\Database\Query\Builder|\App\ProductType whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductType whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductType whereNameEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductType whereNameSc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductType whereNameTc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductType whereUpdatedAt($value)
 */
	class ProductType extends \Eloquent {}
}

namespace App{
/**
 * App\RepairTerm
 *
 * @property int $id
 * @property string $locale
 * @property string $title
 * @property string $message
 * @property string $country
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTerm whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTerm whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTerm whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTerm whereLocale($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTerm whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTerm whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTerm whereUpdatedAt($value)
 */
	class RepairTerm extends \Eloquent {}
}

namespace App{
/**
 * App\ServiceCenter
 *
 * @property int $id
 * @property string $country
 * @property float $latitude
 * @property float $longitude
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ServiceCenterTranslation[] $translations
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter listsTranslations($translationField)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter orWhereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter orWhereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter translated()
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter translatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter whereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter whereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenter withTranslation()
 */
	class ServiceCenter extends \Eloquent {}
}

namespace App{
/**
 * App\ServiceCenterTranslation
 *
 * @property int $id
 * @property int $service_center_id
 * @property string $locale
 * @property string $name
 * @property string $address
 * @property string $opening_hour
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenterTranslation whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenterTranslation whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenterTranslation whereFax($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenterTranslation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenterTranslation whereLocale($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenterTranslation whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenterTranslation whereOpeningHour($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenterTranslation wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ServiceCenterTranslation whereServiceCenterId($value)
 */
	class ServiceCenterTranslation extends \Eloquent {}
}

namespace App{
/**
 * App\Settings
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Settings whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Settings whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Settings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Settings whereValue($value)
 */
	class Settings extends \Eloquent {}
}

namespace App{
/**
 * App\Subscription
 *
 * @property int $id
 * @property string $email
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereUpdatedAt($value)
 */
	class Subscription extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $gender
 * @property \Carbon\Carbon $birthday
 * @property string $profile_pic
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $phone
 * @property string $mobile
 * @property bool $is_verified
 * @property bool $accept_edm
 * @property string $api_token
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAcceptEdm($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereApiToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereBirthday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereGender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereIsVerified($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereMobile($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereProfilePic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\WarrantyTerm
 *
 * @property int $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\WarrantyTermTranslation[] $translations
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm listsTranslations($translationField)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm orWhereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm orWhereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm translated()
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm translatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm whereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm whereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTerm withTranslation()
 */
	class WarrantyTerm extends \Eloquent {}
}

namespace App{
/**
 * App\WarrantyTermTranslation
 *
 * @property int $id
 * @property int $warranty_term_id
 * @property string $locale
 * @property string $message
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTermTranslation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTermTranslation whereLocale($value)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTermTranslation whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\WarrantyTermTranslation whereWarrantyTermId($value)
 */
	class WarrantyTermTranslation extends \Eloquent {}
}

namespace App{
/**
 * App\Shop
 *
 * @property int $id
 * @property string $phone
 * @property string $country
 * @property string $region
 * @property float $latitude
 * @property float $longitude
 * @property bool $enabled
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ShopTranslation[] $translations
 * @method static \Illuminate\Database\Query\Builder|\App\Shop listsTranslations($translationField)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop orWhereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop orWhereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop translated()
 * @method static \Illuminate\Database\Query\Builder|\App\Shop translatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereRegion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shop withTranslation()
 */
	class Shop extends \Eloquent {}
}

namespace App{
/**
 * App\ShopTranslation
 *
 * @property int $id
 * @property int $shop_id
 * @property string $locale
 * @property string $name
 * @property string $address
 * @method static \Illuminate\Database\Query\Builder|\App\ShopTranslation whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ShopTranslation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ShopTranslation whereLocale($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ShopTranslation whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ShopTranslation whereShopId($value)
 */
	class ShopTranslation extends \Eloquent {}
}

namespace App{
/**
 * App\UserToken
 *
 * @property int $id
 * @property int $user_id
 * @property string $application
 * @property string $token
 * @property string $expire_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\UserToken whereApplication($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserToken whereExpireDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserToken whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserToken whereToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserToken whereUserId($value)
 */
	class UserToken extends \Eloquent {}
}

