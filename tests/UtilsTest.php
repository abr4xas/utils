<?php

namespace Abr4xas\Utils\Tests;

use Abr4xas\Utils\Gravatar;
use Abr4xas\Utils\RandomStringGenerator;
use Abr4xas\Utils\SeoUrl;
use Abr4xas\Utils\SuggestKeyword;
use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{
    /** @test */
    public function test_it_retur_pretty_url()
    {
        $slug = SeoUrl::generateSlug('this is an awesome string');

        $this->assertEquals('this-is-an-awesome-string', $slug);
    }

    /** @test */
    public function test_it_array_of_key_words()
    {
        $keywords = SuggestKeyword::SuggestKeyword('php');

        $this->assertIsArray($keywords);
    }

    /** @test */
    public function test_it_can_generate_random_string()
    {
        $token = (new RandomStringGenerator)->generate();

        $this->assertTrue(is_string($token));
    }

    /** @test */
    public function test_it_can_generate_random_string_with_custom_alphabet()
    {
        $customAlphabet = '0123456789ABCDEF';

        $token = (new RandomStringGenerator($customAlphabet))->generate();

        $this->assertTrue(is_string($token));
    }

    /** @test */
    public function test_it_can_generate_random_string_setting_custom_alphabet()
    {
        $customAlphabet = '0123456789ABCDEF';

        $token = (new RandomStringGenerator)->setAlphabet($customAlphabet)->generate();

        $this->assertTrue(is_string($token));
    }

    /** @test */
    public function test_it_can_get_gravatar_url()
    {
        $avatar = Gravatar::getAvatarUrl('john.doe@domain.tld');

        $this->assertTrue(is_string($avatar));
    }
}
