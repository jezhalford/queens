require 'pp'
require 'ostruct'

QUEEN = "\u265B-"

class Placement
  def covered?
    does_contain || 
  end
end

def initial_board
  ([Array.new(8)] * 8).collect {|row| row.collect { OpenStruct.new } }
end

def can_place_queen? board, x, y
  (1..8).each do |i|
    return !board[x][i].covered?
    return !board[i][y].covered?
    if x-i >= 0 && x-i < 8 && y+i >= 0 && y+i < 8 
      return !board[x-i][y+i].covered?
    end
    if x+i >= 0 && x+i < 8 && y-i >= 0 && y-i < 8 
      return !board[x+i][y-i].covered?
    end
  end
  true
end
