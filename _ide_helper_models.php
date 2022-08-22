<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $image
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\AdminFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Article
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $title_ar
 * @property string $body
 * @property string $body_ar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBodyAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 */
	class Article extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Baner
 *
 * @property int $id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Baner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Baner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Baner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Baner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Baner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Baner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Baner whereUpdatedAt($value)
 */
	class Baner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $title_ar
 * @property string $body
 * @property string $body_ar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereBodyAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Business
 *
 * @property int $id
 * @property string $name
 * @property string $name_ar
 * @property string|null $body
 * @property string|null $body_ar
 * @property string $link
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $files
 * @property-read int|null $files_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Business newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Business newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Business query()
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereBodyAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereUpdatedAt($value)
 */
	class Business extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $model
 * @property string $image
 * @property string $name
 * @property string $name_ar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Comment
 *
 * @property int $id
 * @property string $comment
 * @property string $commentable_type
 * @property int $commentable_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUserId($value)
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CommonSection
 *
 * @property int $id
 * @property string $name
 * @property string $name_ar
 * @property string $link
 * @property string $details
 * @property string $details_ar
 * @property string $type
 * @property string $type_ar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @method static \Database\Factories\CommonSectionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereDetailsAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereTypeAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonSection whereUpdatedAt($value)
 */
	class CommonSection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Competition
 *
 * @property int $id
 * @property string $name
 * @property string $name_ar
 * @property string $details
 * @property string $details_ar
 * @property string $prize
 * @property string $prize_ar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $compatitionUser
 * @property-read int|null $compatition_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CompetitionUser[] $members
 * @property-read int|null $members_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PostCompatition[] $postCompatition
 * @property-read int|null $post_compatition_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $prize_files
 * @property-read int|null $prize_files_count
 * @method static \Illuminate\Database\Eloquent\Builder|Competition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereDetailsAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition wherePrize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition wherePrizeAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereUpdatedAt($value)
 */
	class Competition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CompetitionUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $competition_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|CompetitionUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompetitionUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompetitionUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompetitionUser whereCompetitionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompetitionUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompetitionUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompetitionUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompetitionUser whereUserId($value)
 */
	class CompetitionUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Course
 *
 * @property int $id
 * @property string $name
 * @property string $name_ar
 * @property string $details
 * @property string $details_ar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $successRate
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @method static \Database\Factories\CourseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDetailsAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereSuccessRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 */
	class Course extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IfmisMember
 *
 * @property int $id
 * @property string $name
 * @property string $name_ar
 * @property string $country
 * @property string $country_ar
 * @property string $job
 * @property string $job_ar
 * @property string $imageProfile
 * @property string $imageFlag
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $image_flag
 * @property-read mixed $image_profile
 * @method static \Database\Factories\IfmisMemberFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereCountryAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereImageFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereImageProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereJobAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IfmisMember whereUpdatedAt($value)
 */
	class IfmisMember extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JoinRoom
 *
 * @property int $id
 * @property int $user_id
 * @property int $room_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\JoinRoomFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|JoinRoom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JoinRoom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JoinRoom query()
 * @method static \Illuminate\Database\Eloquent\Builder|JoinRoom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JoinRoom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JoinRoom whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JoinRoom whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JoinRoom whereUserId($value)
 */
	class JoinRoom extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\League
 *
 * @property int $id
 * @property string $name
 * @property string $name_ar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|League newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|League newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|League query()
 * @method static \Illuminate\Database\Eloquent\Builder|League whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|League whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|League whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|League whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|League whereUpdatedAt($value)
 */
	class League extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Lession
 *
 * @property int $id
 * @property string $name
 * @property string $name_ar
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Lession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lession query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lession whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lession whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lession whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lession whereUpdatedAt($value)
 */
	class Lession extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LessionUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|LessionUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LessionUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LessionUser query()
 */
	class LessionUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Like
 *
 * @property int $id
 * @property int|null $is_like
 * @property string $likeable_type
 * @property int $likeable_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $likeable
 * @method static \Illuminate\Database\Eloquent\Builder|Like newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like query()
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereIsLike($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereLikeableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereLikeableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereUserId($value)
 */
	class Like extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MarkUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property string $mark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MarkUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarkUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarkUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|MarkUser whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarkUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarkUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarkUser whereMark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarkUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarkUser whereUserId($value)
 */
	class MarkUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MessageRoom
 *
 * @property int $id
 * @property int $user_id
 * @property int $room_id
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Room $room
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|MessageRoom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageRoom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageRoom query()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageRoom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageRoom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageRoom whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageRoom whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageRoom whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageRoom whereUserId($value)
 */
	class MessageRoom extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\News
 *
 * @property int $id
 * @property string $title
 * @property string $title_ar
 * @property string $body
 * @property string $body_ar
 * @property int $category_id
 * @property string $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereBodyAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 */
	class News extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PostCompatition
 *
 * @property int $id
 * @property int $user_id
 * @property int $competition_id
 * @property string $body
 * @property string $video
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \App\Models\Competition|null $compatition
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\PostCompatitionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition whereCompetitionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCompatition whereVideo($value)
 */
	class PostCompatition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $store_id
 * @property string $link
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Quiz
 *
 * @property int $id
 * @property string $question
 * @property string $question_ar
 * @property string|null $correct_answer
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereCorrectAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereQuestionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereUpdatedAt($value)
 */
	class Quiz extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuizeUser
 *
 * @property int $id
 * @property int $course_id
 * @property int $user_id
 * @property int $quiz_id
 * @property string $answer_user
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser whereAnswerUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeUser whereUserId($value)
 */
	class QuizeUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Research
 *
 * @property int $id
 * @property int $category_id
 * @property int|null $user_id
 * @property string $title
 * @property string $title_ar
 * @property string $body
 * @property string $body_ar
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $link
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $Mylikes
 * @property-read int|null $mylikes_count
 * @property-read \App\Models\User|null $auther
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @property-read \App\Models\Visitor|null $visitors
 * @method static \Illuminate\Database\Eloquent\Builder|Research accepted()
 * @method static \Illuminate\Database\Eloquent\Builder|Research newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Research newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Research query()
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereBodyAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereUserId($value)
 */
	class Research extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Room
 *
 * @property int $id
 * @property string $name
 * @property string $name_ar
 * @property string $image
 * @property string $color
 * @property int $maxNumberOfMembers
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JoinRoom[] $join_User
 * @property-read int|null $join__user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MessageRoom[] $messages
 * @property-read int|null $messages_count
 * @method static \Illuminate\Database\Eloquent\Builder|Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room query()
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereMaxNumberOfMembers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereUpdatedAt($value)
 */
	class Room extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Section
 *
 * @property int $id
 * @property string $name
 * @property string $name_ar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\photo|null $image
 * @method static \Illuminate\Database\Eloquent\Builder|Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section query()
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereUpdatedAt($value)
 */
	class Section extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SiteInfo
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property string $name_ar
 * @property string $value_ar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SiteInfoFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteInfo whereValueAr($value)
 */
	class SiteInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Store
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $name_ar
 * @property string $link
 * @property string|null $lang
 * @property string|null $lat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\photo[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\StoreFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Store newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Store query()
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereUpdatedAt($value)
 */
	class Store extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Suggestion
 *
 * @property int $id
 * @property string $name
 * @property string $age
 * @property string $job
 * @property string $email
 * @property string $phoneNumber
 * @property string $country
 * @property string $typeOfJob
 * @property string $file
 * @property string $sectionName
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereSectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereTypeOfJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereUpdatedAt($value)
 */
	class Suggestion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $email
 * @property string|null $user_name
 * @property string $fname
 * @property string $lname
 * @property string|null $phone
 * @property string|null $country
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Competition[] $compatitionUser
 * @property-read int|null $compatition_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JoinRoom[] $join_Room
 * @property-read int|null $join__room_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MarkUser[] $markUser
 * @property-read int|null $mark_user_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserName($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Visitor
 *
 * @property int $id
 * @property int $research_id
 * @property int $counter
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereCounter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereResearchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor whereUpdatedAt($value)
 */
	class Visitor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\newsAds
 *
 * @property int $id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\newsAdsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|newsAds newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|newsAds newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|newsAds query()
 * @method static \Illuminate\Database\Eloquent\Builder|newsAds whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsAds whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsAds whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsAds whereUpdatedAt($value)
 */
	class newsAds extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\photo
 *
 * @property int $id
 * @property string $photoable_type
 * @property int $photoable_id
 * @property string $src
 * @property string|null $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $photoable
 * @method static \Illuminate\Database\Eloquent\Builder|photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|photo wherePhotoableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|photo wherePhotoableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|photo whereSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|photo whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|photo whereUpdatedAt($value)
 */
	class photo extends \Eloquent {}
}

