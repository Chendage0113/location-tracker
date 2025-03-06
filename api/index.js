export default function handler(req, res) {
    const { lat, long } = req.query;
    if (!lat || !long) {
        return res.status(400).json({ error: "缺少纬度或经度参数" });
    }
    const data = `纬度: ${lat}, 经度: ${long}`;
    res.status(200).send(data);
}
