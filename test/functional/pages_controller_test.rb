require 'test_helper'

class PagesControllerTest < ActionController::TestCase
  test "should get home" do
    get :home
    assert_response :success
  end

  test "should get bio" do
    get :bio
    assert_response :success
  end

  test "should get music" do
    get :music
    assert_response :success
  end

  test "should get calendar" do
    get :calendar
    assert_response :success
  end

  test "should get gallery" do
    get :gallery
    assert_response :success
  end

  test "should get guestbook" do
    get :guestbook
    assert_response :success
  end

  test "should get contact" do
    get :contact
    assert_response :success
  end

  test "should get blog" do
    get :blog
    assert_response :success
  end

end
