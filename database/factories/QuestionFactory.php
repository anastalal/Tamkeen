<?php

namespace Database\Factories;

use App\Models\Pattern;
use App\Models\Question;
use App\Enums\QuestionColor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */

 class QuestionFactory extends Factory
 {
     protected $model = Question::class;
 
     public function definition()
     {
         $questions = [
             ['text' => 'بناء خزانة مطبخ', 'color' => QuestionColor::Green],
             ['text' => 'تشغيل مزرعة لمنتجات الألبان', 'color' => QuestionColor::Green],
             ['text' => 'مراقبة آلة على خط تجميع بمصنع ما', 'color' => QuestionColor::Green],
             ['text' => 'حراسة أموال في سيارة مصفحة', 'color' => QuestionColor::Green],
             ['text' => 'تقوم بأعمال الرصف وتركيب البالط', 'color' => QuestionColor::Green],
             ['text' => 'إصلاح الأجهزة المنزلية', 'color' => QuestionColor::Green],
             ['text' => 'دراسة السفر للفضاء', 'color' => QuestionColor::Pink],
             ['text' => 'دراسة تاريخ الحضارات القديمة', 'color' => QuestionColor::Pink],
             ['text' => 'تطوير دواء جديد', 'color' => QuestionColor::Pink],
             ['text' => 'عمل خريطة لقاع المحيط', 'color' => QuestionColor::Pink],
             ['text' => 'دراسة سلوك الحيوان', 'color' => QuestionColor::Pink],
             ['text' => 'التخطيط لدراسة الجدوى', 'color' => QuestionColor::Pink],
             ['text' => 'قيادة فرق موسيقية', 'color' => QuestionColor::Orange],
             ['text' => 'تقوم بإخراج مسرحية', 'color' => QuestionColor::Orange],
             ['text' => 'كتابة الكتب أو المسرحيات', 'color' => QuestionColor::Orange],
             ['text' => 'كتابة القصص والمقالات للمجلات', 'color' => QuestionColor::Orange],
             ['text' => 'تؤلف رقصة لعرض مسرحي', 'color' => QuestionColor::Orange],
             ['text' => 'العزف على الآلات الموسيقية', 'color' => QuestionColor::Orange],
             ['text' => 'تعليم شخص ما أداء نظام معين', 'color' => QuestionColor::Purple],
             ['text' => 'إعطاء تنفس صناعي لشخص ما فاقد الوعي', 'color' => QuestionColor::Purple],
             ['text' => 'تعليم الأطفال كيفية القراءة', 'color' => QuestionColor::Purple],
             ['text' => 'أداء مهام الممرضة بمستشفى', 'color' => QuestionColor::Purple],
             ['text' => 'مساعدة أفراد لديهم مشاكل شخصية أو عاطفية', 'color' => QuestionColor::Purple],
             ['text' => 'العمل مع أطفال لديهم إعاقات ذهنية', 'color' => QuestionColor::Purple],
             ['text' => 'البيع والشراء للأسهم والسندات', 'color' => QuestionColor::Yellow],
             ['text' => 'بيع أجهزة التلفون أو أي من وسائل الاتصالات', 'color' => QuestionColor::Yellow],
             ['text' => 'ممارسة البيع عن طريق التلفون', 'color' => QuestionColor::Yellow],
             ['text' => 'إدارة متجر بيع بالتجزئة', 'color' => QuestionColor::Yellow],
             ['text' => 'تشغيل مركز تجميل أو صالون حلاقة', 'color' => QuestionColor::Yellow],
             ['text' => 'إقامة موقع لبيع الجرائد والمجلات', 'color' => QuestionColor::Yellow],
             ['text' => 'تطوير ملف حسابات باستخدام كمبيوتر', 'color' => QuestionColor::Blue],
             ['text' => 'استخدام برامج الكمبيوتر لإعداد فواتير العملاء', 'color' => QuestionColor::Blue],
             ['text' => 'الاحتفاظ بإيصالات ومدفوعات العملاء بالمكتب', 'color' => QuestionColor::Blue],
             ['text' => 'تصحيح أخطاء الطباعة للسجلات', 'color' => QuestionColor::Blue],
             ['text' => 'ترتيب الاجتماعات لصالح هيئة أو منظمة', 'color' => QuestionColor::Blue],
             ['text' => 'تشغيل برنامج كمبيوتر على شبكة كمبيوتر كبيرة', 'color' => QuestionColor::Blue],
         ];
 
         static $index = 0;
         $question = $questions[$index % count($questions)];
         $index++;
 
         // العثور على معرف النمط المطابق للون السؤال
         $pattern = Pattern::where('color', $question['color'])->first();
 
         return [
             'text' => $question['text'],
             'pattern_id' => $pattern->id,
             'color' =>$question['color']
         ];
     }
 }
