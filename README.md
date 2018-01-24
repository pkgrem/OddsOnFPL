# OddsOnFPL - Team Prediction Points
Writing a bit of code for OddsOnFPL using the fantasy.premierleague.com API. The api required some logical translation with the API labeling player positions as numbered 'element_type's and player team's as 'team_code's. There will have to be some code done on the player's cost as it currently shows without a full stop. 

The idea is to utilise our website's database which we are creating to allow users to input their own team ID and to get a prediction for the points for that game week.

The work which is required is to match our own player data with the FPL data and use the player's ID from FPL as a foreign key.

#Sources:
https://fantasy.premierleague.com/drf/bootstrap-static - All information
https://fantasy.premierleague.com/drf/element-summary/176 - Player information - Mahrez as an example.
https://fantasy.premierleague.com/drf/bootstrap-static/my-team/{teamId} - Allows a user to input their team ID


Base url: https://fantasy.premierleague.com/drf/

Relative links:
/bootstrap (more data if authenticated)
/bootstrap-static
/bootstrap-dynamic

/events
/elements
/element-types
/fixtures
/teams
/region
/transfers (requires auth)
/entry/{entryId}
/entries (doesn't work in pre-season?)
/my-team/{teamId} (requires auth)
/leagues-entered/{teamId} (requires auth)
/leagues-classic/{leagueId} (must be a member)
/leagues-classic-standings/{leagueId}
/leagues-h2h/{leagueId} (must be a member)
/leagues-h2h-standings/{leagueId}
