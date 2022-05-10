const express = require('express');
const { json } = require('express/lib/response');
const app = express()
const router = express.Router()
var SpotifyWebApi = require('spotify-web-api-node');

var spotifyApi = new SpotifyWebApi({
    clientId: '6a9474c0ab0048c48e36f9458ad9abee',
    clientSecret: '937d76be87fb416b9c1e3289d827281d',
    redirectUri: 'http://localhost:8888/callback'
});

const token = "BQDiOmyua2ZO5hfAGOqKneEMLNGpugRtx0in5KwJ_Tlwnr3vurQLLE1_rYP_10ZDpqY0mOx8zRtPa48niWGysl0yAlpJW-TQq2H6l4mlSu5DZNG6lOPdDbD3eyYYsCz7COaJ-soXyl_3T7i3sRRLWfDmzHgT-Btegmakx-mb1wuTFQita7uLXKXLdElyTCa-0C-W2ORBB-ypH-XyaHt4nQ8zqVSKUjbtC3R3scHPD-VGiYljdnJyLsr3s_6D12ZnCSnn8lJe1RzazCdalaXquDxQilCZeUscJHdj5iY1KiEz5rWwz0WK"

router.get('/', (req, res, next) => {
    res.redirect(spotifyApi.createAuthorizeURL([
        "ugc-image-upload",
        "user-read-recently-played",
        "user-read-playback-state",
        "user-top-read",
        "app-remote-control",
        "playlist-modify-public",
        "user-modify-playback-state",
        "playlist-modify-private",
        "user-follow-modify",
        "user-read-currently-playing",
        "user-follow-read",
        "user-library-modify",
        "user-read-playback-position",
        "playlist-read-private",
        "user-read-email",
        "user-read-private",
        "user-library-read",
        "playlist-read-collaborative",
        "streaming"

    ]))
})

/*router.get('/callback', (req, res, next) => {
    console.log('reqquery', req.query)
    const code = req.query.code
    spotifyApi.authorizationCodeGrant(req.query.code).then((response) => {
        res.send(JSON.stringify(response))
        spotifyApi.setAccessToken(token)
    })


})
*/
spotifyApi.setAccessToken(token)
const getMe = () => {
    spotifyApi.getMe()
        .then(function (data) {
            console.log('Some information about the authenticated user', data.body);
        }, function (err) {
            console.log('Something went wrong!', err);
        });
}
getMe()

const getPlayList = async () => {
    const data = await spotifyApi.getUserPlaylists("69nb3a1af4vgni4845qx9kx3v")
    for (let index = 0; index < data.body.items.length; index++) {
        console.log('data', data.body.items[index])
    }
}
//getPlayList()

const getTopTracks = () => {
    spotifyApi.getMyTopTracks()
        .then(function (data) {
            let topTracks = data.body.items;
            console.log(topTracks);
        }, function (err) {
            console.log('Something went wrong!', err);
        });

}
//getTopTracks()

const getTopArtist = () => {
   
    spotifyApi.getMyTopArtists()
        .then(function (data) {
            let topArtists = data.body.items;
            console.log(topArtists);
        }, function (err) {
            console.log('Something went wrong!', err);
        });

}
//getTopArtist()

const getPlaylistTracks = () => {

    spotifyApi
    .getPlaylistTracks('2VQYh2g6auNs0DUMSDQEJr', {
      offset: 1,
      limit: 5,
      fields: 'items'
    })
    .then(
      function(data) {
        console.log('The playlist contains these tracks', data.body);
      },
      function(err) {
        console.log('Something went wrong!', err);
      }
    );
}
//getPlaylistTracks()

const getMyRecentlyPlayedTracks = () => {
    spotifyApi.getMyCurrentPlayingTrack()
    .then(function(data) {
      console.log('Now playing: ' + data.body.item.name);
    }, function(err) {
      console.log('Something went wrong!', err);
    });

}
//getMyRecentlyPlayedTracks()


app.use('/', router)

app.listen(8888, () => {
    console.log('running')
})