class ApplicationController < ActionController::Base
  before_filter :authorize
  protect_from_forgery
  include SessionsHelper

  protected
    def authorize
      unless User.find_by_id(session[:user_id])
        redirect_to root_path, :notice => "Please log in"
      end
    end
end
